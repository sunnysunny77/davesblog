const button = document.querySelectorAll(".delpost");

for (const index of button) {

  index.addEventListener("click", (e) => {

    const id = e.currentTarget.getAttribute("postID");
    const title = e.currentTarget.getAttribute("postTitle");

    if (confirm(`Are you sure you want to delete '${  title  }'`))
    {
      window.location.href = `./?&id=${  id}`;
    }
  },null);
}