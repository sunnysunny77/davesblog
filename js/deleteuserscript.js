import { events } from "./utillites.js";

export const deleteuserscript = () => {

  const button = document.querySelectorAll(".deluser");

  if (button.length === 0) {
    return;
  }

  for (const index of button) {

   events(index, "click", (e) => {
  
      const id = e.currentTarget.getAttribute("data-memberID");
      const title = e.currentTarget.getAttribute("data-userName");
  
      if (confirm(`Are you sure you want to delete '${  title  }'`))
      {
        window.location.href = `./?action=users&id=${id}`;
      }
    },null);
  }
};
