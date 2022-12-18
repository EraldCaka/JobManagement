let Username = "admin";
let Password = "admin";
let loggedin = false;
document.querySelector(".submit").addEventListener("click", function () {
  let username = document.querySelector(".username").value;
  let password = document.querySelector(".password").value;
  if (username === Username && password === Password) {
    alert("Login Successful");
    loggedin = true;
  } else {
    alert("Login Failed");
  }
});
export { loggedin };
