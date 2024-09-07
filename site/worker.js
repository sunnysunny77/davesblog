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
      ]);
    })
  );
});

self.addEventListener("fetch", event => {
  
  event.respondWith(
      fetch(event.request).catch(() => {
          return caches.match(event.request);
      })
  );
});