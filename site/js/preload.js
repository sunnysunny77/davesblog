const preload_image = (url) => {
  var img = new Image();
  img.src = url;
};

const path = location.pathname;

if(path.includes("about")) {

  preload_image("./images/about.webp");
} else if(path.includes("contact")) {
  
  preload_image("./images/contact.webp");
} 
