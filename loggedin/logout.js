console.log("logout.js");
document.querySelector(".logout").addEventListener("click", function () {
  console.log("logout");
  //localStorage.setItem("loggedin", false);
  localStorage.setItem("username", "");
  localStorage.setItem("password", "");

  change();
});
function change() {
  document.querySelector(".identification").href =
    "http://localhost:3000/JobManagement/login/validation.php";
}
console.log("logout.js end");
/* dont allow to go back to the previous page */
