import { events } from "./utillites.js";

export const top = () => {

    const html = document.querySelector("html");
    const top = document.querySelector(".top");

    if (!html || !top) {

      return;
    }

    console.log(html.scrollHeight - 50, window.innerHeight)
    const height = () => {

        if (html.scrollHeight > window.innerHeight + 50) {

            top.style.display = "flex";
        } else {

            top.style.display = "none";
        }
    };

    height();

    events(window, "resize", height, {passive: true});
};