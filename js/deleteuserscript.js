const button = document.querySelectorAll(".deluser");

for (const index of button) {

  index.addEventListener("click", (e) => {

    const id = e.currentTarget.getAttribute("memberID");
    const title = e.currentTarget.getAttribute("userName");

    if (confirm(`Are you sure you want to delete '${  title  }'`))
    {
      window.location.href = `./?action=users&id=${  id}`;
    }
  },null);
}