import { events } from "./utillites.js";

export const top = () => {

    const html = document.querySelector("html");
    const top = document.querySelector(".top");

    if (!html || !top) {

      return;
    }

    const height = () => {

        console.log(html.scrollHeight,  window.innerHeight)
        if (html.scrollHeight > window.innerHeight) {

            top.style.display = "flex";
        } else {

            top.style.display = "none";
        }
    };

    height();

    events(window, "resize", height, {passive: true});
};