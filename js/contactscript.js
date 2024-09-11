import { events } from "./utillites.js";

export const contactscript = () => {

  const contact = document.querySelector("#contact");
  const sent = document.querySelector("#sent");

  if (!contact && !sent) {
    return;
  }

  events(contact, "submit", async (e) => {

    e.preventDefault();

    const formData = new FormData(e.currentTarget);
    const url = "./cont.php";

    try {

      const res = await fetch(url, { method: "POST", body: formData });

      if (!res.ok) {

        throw new Error("Offline");
      }
  
      const text = await res.text();

       if (text) {

        sent.innerHTML =  text;
       }

    } catch (error) {

      sent.innerHTML = error;
    }
  },null);
};
