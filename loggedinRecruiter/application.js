let usersLen = localStorage.getItem("usersLen");

for (let i = 1; i <= usersLen; i++) {
  document
    .querySelector(`.searchbtn2${i}`)
    .addEventListener(`click`, function () {
      console.log(document.querySelector(`.searchbtn2${i}`).value);
    });
  document
    .querySelector(`.searchbtn1${i}`)
    .addEventListener(`click`, function () {
      console.log(document.querySelector(`.searchbtn1${i}`).value);
    });
}
