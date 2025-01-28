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