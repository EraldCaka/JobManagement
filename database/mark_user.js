"use strict";
let name1 = document.querySelector(".uname2").textContent;

for (let i = 1; i < 5; i++) {
  name1 = document.querySelector(".uname" + i).textContent;
  console.log(name1);
  if (name1 == localStorage.getItem("username")) {
    document.querySelector(".uname" + i).style.backgroundColor = "red";

    document.querySelector(".row2" + i).style.backgroundColor = "red";
    document.querySelector(".row3" + i).style.backgroundColor = "red";
    document.querySelector(".row4" + i).style.backgroundColor = "red";
    document.querySelector(".row5" + i).style.backgroundColor = "red";
    document.querySelector(".row6" + i).style.backgroundColor = "red";
  }
}
