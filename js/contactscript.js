import { events } from "./utillites.js";

export const contactscript = () => {

  const contact = document.querySelector("#contact");
  const sent = document.querySelector("#sent");

  if (!contact && !sent) {
    return;
  }

  events(contact, "submit", (e) => {

    const formData = new FormData(e.currentTarget);

    fetch(
      "./cont.php",
      {
        method: "POST",
        body: formData
      }
    ).then((res) => {
      return res.text();
    }).then((value) => {
      sent.innerHTML = value;
    }).catch(() => {
      sent.innerHTML = "Sorry, mail offline";
    });

    e.preventDefault();
  },null);
};
