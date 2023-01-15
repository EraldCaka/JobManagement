for (let i = 1; i <= 4; i++) {
  document
    .querySelector(".job-button" + i)
    .addEventListener("click", function () {
      if (i == 1) {
        localStorage.setItem("job", "front-end");
      } else if (i == 2) {
        localStorage.setItem("job", "back-end");
      } else if (i == 3) {
        localStorage.setItem("job", "full-stack");
      } else if (i == 4) {
        localStorage.setItem("job", "graphic-Designer");
      }
    });
}
