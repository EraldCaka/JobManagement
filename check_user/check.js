if (
  localStorage.getItem("islogged") != "true" &&
  localStorage.getItem("user_type") != "recruiter"
) {
  //redirect to the previous page
  window.location.href =
    "http://localhost:3000/JobManagement/login/validation.php";
} else {
}
//
