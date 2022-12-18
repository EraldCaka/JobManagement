console.log("logout.js");
document.querySelector(".logout").addEventListener("click", function () {
  console.log("logout");
  localStorage.setItem("loggedin", false);
  localStorage.setItem("username", "");
  localStorage.setItem("password", "");
  if (localStorage.getItem("loggedin") === "false") {
    console.log("logged out");
    change();
  }
});
function change() {
  document.querySelector(".identification").href = "http://localhost:3000/JobManagement/login/validation.php";
}
