const preload_image = (url) => {
  var img = new Image();
  img.src = url;
};

if(location.pathname === "/about.php") {
  preload_image("images/about.png");
}
if(location.pathname === "/contact.php") {
  preload_image("images/contact.png");
}