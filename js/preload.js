import { preload_image } from "./utillites.js";

export const preload = () => {

  const path = location.pathname;

  if(path.includes("admin")) {

    preload_image("../images/atom.svg");
  } else {

    preload_image("images/atom.svg");
  }

  if(path.includes("about")) {

    preload_image("images/about.png");
  }

  if(path.includes("contact")) {
    
    preload_image("images/contact.png");
  }
};