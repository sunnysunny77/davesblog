// import "bootstrap/js/dist/alert";
// import "bootstrap/js/dist/button";
// import "bootstrap/js/dist/carousel";
// import "bootstrap/js/dist/collapse";
// import "bootstrap/js/dist/dropdown";
// import "bootstrap/js/dist/modal";
// import "bootstrap/js/dist/popover";
// import "bootstrap/js/dist/scrollspy";
// import "bootstrap/js/dist/tab";
// import "bootstrap/js/dist/toast";
// import "bootstrap/js/dist/tooltip";

import { service_worker } from "./service_worker.js";
import { events } from "./utillites.js";
import { deleteuserscript } from "./deleteuserscript.js";
import { deletescript } from "./deletescript.js";
import { contactscript } from "./contactscript.js";
import { top } from "./top.js";
import { fallback } from "./fallback.js";

events(window, "load", () => {

    fallback();
    top();
    contactscript();
    deletescript();
    deleteuserscript();
    service_worker();
});