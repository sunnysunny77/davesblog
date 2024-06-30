document.querySelector("#contact").addEventListener("submit", (e) => {

  const formData = new FormData(e.currentTarget);
  const sent = document.querySelector("#sent");

  let promise = new Promise(function(myResolve, myReject) {
    let req = new XMLHttpRequest();
    req.open("POST", "cont.php", true);
    req.addEventListener("load", function() {
      if (req.status === 200) {
        myResolve(req.responseText);
      } else {
        myReject("File not Found");
      }
    });
    req.send(formData);
  });
  promise.then((value) => {
    sent.innerHTML = value;
  }
  ).catch((error) => {
    sent.innerHTML = error;
  }
  );

  e.preventDefault();
},null);
