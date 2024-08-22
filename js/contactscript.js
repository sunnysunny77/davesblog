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
      if (!res.ok) {
        throw new Error("File not Found");
      }
      return res.text();
    }).then((value) => {
      sent.innerHTML = value;
    }).catch((error) => {
      sent.innerHTML = error;
    });

    e.preventDefault();
  },null);
};
