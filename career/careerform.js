document.querySelector(".submit_btn").addEventListener("click", function () {
  let name1 = document.querySelector(".name").value;
  let lastname = document.querySelector(".lastname1").value;
  let phone = document.querySelector(".phone").value;
  let email = document.querySelector(".email").value;
  let degree = document.querySelector(".degree").value;
  let data = {
    name: name1,
    lastname: lastname,
    email: email,
    phone: phone,
    degree: degree,
  };
  console.log(data);
});
