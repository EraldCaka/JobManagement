console.log("firstProcess.js");
document.querySelector(".welcome").textContent +=
  " " + localStorage.getItem("username");
