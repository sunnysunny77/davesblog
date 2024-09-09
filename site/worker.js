self.addEventListener("install", function(event) {

  event.waitUntil(
    caches.open("v1").then(function(cache) {
      return cache.addAll([
        "./",
        "./index.php",
        "./about.php",
        "./contact.php",
        "./admin/index.php",
        "./css/app.min.css",
        "./js/app.min.js",
        "font/OpenSans.ttf",
        "webfonts/fa-brands-400.woff2",
        "webfonts/fa-solid-900.woff2",
        "./images/about.webp",
        "./images/contact.webp",
      ]);
    })
  );
});

self.addEventListener("fetch", event => {

  event.respondWith(caches.open("v1").then((cache) => {

      return fetch(event.request).then((networkResponse) => {

        cache.put(event.request, networkResponse.clone());

        return networkResponse;
      }).catch(() => {

        return caches.match(event.request);
    } );
  }));
});