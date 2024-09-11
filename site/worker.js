const version = 1;
const cacheName = `davesblog-v${version}`;

const cacheAssets = [
  "./",
  "./favicon.ico",
  "./manifest.json",
  "./index.php",
  "./about.php",
  "./contact.php",
  "./css/app.min.css",
  "./js/app.min.js",
  "./js/preload.js",
  "./font/OpenSans.ttf",
  "./webfonts/fa-brands-400.woff2",
  "./webfonts/fa-solid-900.woff2",
  "./images/about.webp",
  "./images/contact.webp",
  "./images/pwa-logo-small.webp",
  "./images/pwa-logo.webp"
];

self.addEventListener("install", (event) => {

  console.log("Service worker is installed");

  event.waitUntil(caches.open(cacheName).then((cache) => {

    console.log("Caching assets");
    cache.addAll(cacheAssets);
  }).then(() => {

    self.skipWaiting();
  }));
});

self.addEventListener("fetch", (event) => {

  console.log("Fetching via Service worker");

  if (event.request.url.match(/admin/)) {
    
    return;
  }

  event.respondWith(fetch(event.request).then((networkResponse) => {
    
    return caches.open(cacheName).then((cache) => {

      cache.put(event.request, networkResponse.clone());
      return networkResponse;
    });
  }).catch(() => {
    
    return caches.match(event.request);
  }));
});