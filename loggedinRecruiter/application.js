for (let i = 1; i <= 5; i++) {
  document
    .querySelector(`.searchbtn${i}`)
    .addEventListener(`click`, function () {
      console.log(document.querySelector(`.searchbtn${i}`).value);
    });
}
