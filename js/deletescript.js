import { events } from "./utillites.js";

export const deletescript = () => {

  const button = document.querySelectorAll(".delpost");

  if (button.length === 0) {
    return;
  }

  for (const index of button) {
 
    events(index, "click", (e) => {

      const id = e.currentTarget.getAttribute("postID");
      const title = e.currentTarget.getAttribute("postTitle");
  
      if (confirm(`Are you sure you want to delete '${  title  }'`))
      {
        window.location.href = `./?&id=${  id}`;
      }
    },null);
  }
};