let Username = "admin";
let Password = "admin";

document.querySelector(".submit").addEventListener("click", function () {
  let username = document.querySelector(".username").value;
  let password = document.querySelector(".password").value;
  if (username === Username && password === Password) {
    alert("Login Successful");
  } else {
    alert("Login Failed");
  }
});
