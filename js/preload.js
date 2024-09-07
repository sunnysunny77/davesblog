import { preload_image } from "./utillites.js";

export const preload = () => {

  const path = location.pathname;


    preload_image("../images/atom.svg");
  if(path.includes("about")) {

    preload_image("./images/about.png");
  } else if(path.includes("contact")) {
    
    preload_image("./images/contact.png");
  } 
};