let name1 = document.querySelector(".name1").value;
let name2 = document.querySelector(".name2").value;
let name3 = document.querySelector(".name3").value;
let name4 = document.querySelector(".name4").value;
let name5 = document.querySelector(".name5").value;
localStorage.setItem("username", name1);
console.log(localStorage.getItem("username"));
document.querySelector(".edit_btn").addEventListener("click", function () {
  if (name1 != "" && name2 != "" && name3 != "" && name4 != "" && name5 != "") {
    localStorage.setItem("username", name1);

    alert("Data Updated");
  }
});
document.querySelector(".name1").textContent = name1;
console.log(localStorage.getItem("username"));
function myFunction() {
  console.log(document.querySelector(".pass").type);
  let x = document.querySelector(".pass");
  if (x.type === "password") {
    x.type = "text";
    console.log(document.querySelector(".pass").type);
  } else {
    x.type = "password";
  }
}
