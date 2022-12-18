console.log("logout.js");
document.querySelector(".logout").addEventListener("click", function () {
  console.log("logout");
  localStorage.setItem("loggedin", false);
  window.location.href = "../login/login.html";
});
