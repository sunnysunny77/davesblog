const preload = (href, as) => {
  const preloadLink = document.createElement("link");
  preloadLink.href = href;
  preloadLink.rel = "preload";
  preloadLink.as = as;
  if (as === "font") {
    preloadLink.crossOrigin = "true";
  }
  document.head.appendChild(preloadLink);
};

const path = location.pathname;

const fonts = [
  "font/OpenSans.ttf",
  "webfonts/fa-brands-400.woff2",
  "webfonts/fa-solid-900.woff2"
];

if(path.includes("about")) {

  for (const index of fonts) {

    preload(`./${index}`, "font");
  }
  preload("./images/about.webp", "image");
} else if (path.includes("contact")) {
  
  for (const index of fonts) {

    preload(`./${index}`, "font");
  }
  preload("./images/contact.webp", "image");
} else if (path.includes("admin")) {
  
  for (const index of fonts) {

    preload(`../${index}`, "font");
  }
} else {

  for (const index of fonts) {

    preload(`./${index}`, "font");
  }
}
