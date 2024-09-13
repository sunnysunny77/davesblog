const version = 1;
const cacheName = `davesblog-v${version}`;

const resources = [
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
  "./images/pwa-logo.webp",
  "./fallback.php"
];

const installResources = async (resources) => {

  const cache = await caches.open(cacheName);
  await cache.addAll(resources);
};

self.addEventListener("install", (event) => {

  console.log("Service worker is installed");
  
  self.skipWaiting();

  event.waitUntil(installResources(resources));
});

const cache = async (req, res) => {

  const cache = await caches.open(cacheName);
  await cache.put(req, res);
};

const admin = async (req) => {

  try {

    const res = await fetch(req);
      
    return res;

  } catch (error) {

    console.log(error);

    const fallback = await caches.match("./fallback.php");

    if (fallback) {

      return fallback;
    }

    return new Response("Network error happened", {
      status: 408,
      headers: { "Content-Type": "text/plain" },
    });
  }
};

const first = async (req) => {

  try {

    const res = await fetch(req);

    cache(req, res.clone());

    return res;

  } catch (error) {

    console.log(error);

    const cache = await caches.match(req);
      
    if (cache) {

      return cache;
    }

    if (req.mode === "navigate") {

      const fallback = await caches.match("./fallback.php");

      if (fallback) {

        return fallback;
      }
    }

    return new Response("Network error happened", {
      status: 408,
      headers: { "Content-Type": "text/plain" },
    });
  }
};

self.addEventListener("fetch", (event) => {

  console.log("Fetching via Service worker");

  if (event.request.url.match(/admin/)) {

    event.respondWith(admin(event.request));
  } else {
    
    event.respondWith(first(event.request));
  }
});