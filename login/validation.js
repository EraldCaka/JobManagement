let loggedin = false;
document.querySelector(".submit").addEventListener("click", function () {
  let username = document.querySelector(".username").value;
  let password = document.querySelector(".password").value;

  //alert("Login Successful");
  //loggedin = true;
  //localStorage.setItem("loggedin", true);
  localStorage.setItem("username", username);
  localStorage.setItem("password", password);
  localStorage.setItem("islogged", true);
  localStorage.setItem("user_id", user_id);

  /* */

  change();
});
function change() {
  //document.querySelector(".identification").href = "../loggedin/admin.html";
}
//export { loggedin };
