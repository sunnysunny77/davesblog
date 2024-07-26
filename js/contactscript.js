document.querySelector("#contact").addEventListener("submit", (e) => {

  const formData = new FormData(e.currentTarget);
  const sent = document.querySelector("#sent");

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
