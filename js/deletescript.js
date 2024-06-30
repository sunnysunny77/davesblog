document.querySelector("#delpost").addEventListener("click", (e) => {

  const id = e.currentTarget.getAttribute("postID");
  const title = e.currentTarget.getAttribute("postTitle");

  if (confirm(`Are you sure you want to delete '${  title  }'`))
  {
    window.location.href = `./?&id=${  id}`;
  }
},null);