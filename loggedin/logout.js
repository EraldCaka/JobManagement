console.log("logout.js");
document.querySelector(".logout").addEventListener("click", function () {
  console.log("logout");
  localStorage.setItem("loggedin", false);
  if (localStorage.getItem("loggedin") === "false") {
    console.log("logged out");
    change();
  }
});
function change() {
  document.querySelector(".identification").href = "../login/login.html";
}