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
  if (loggedin === true) {
    localStorage.setItem("loggedin", true);
    localStorage.setItem("username", username);
    localStorage.setItem("password", password);
    change();
  }
});
function change() {
  document.querySelector(".identification").href = "../loggedin/admin.html";
}
//export { loggedin };
