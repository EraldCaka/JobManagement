<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobManager</title>
    <link rel="stylesheet" href="../homePage/homePage.css" />
    <link rel="stylesheet" href="careerForm.css" />
    <link rel="icon" type="image/png" href="../images/icon.png" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li class="first">
            <a href="http://localhost:3000/JobManagement/login/validation.php"
              >Login</a
            >
          </li>
          <li>|</li>
          <li class="first">
            <a href="../contacts/contacts.html">Contacts</a>
          </li>
          <li>|</li>
          <li class="first"><a href="../about-us/aboutUs.html">About Us</a></li>
          <li>|</li>
          <li class="first"><a href="career.html">Career</a></li>
          <li>|</li>
          <li class="first">
            <a href="http://localhost:3000/JobManagement/homePage/homePage.php"
              >Home</a
            >
          </li>
        </ul>
      </nav>
    </header>
    <div class="login1">
      <form class="form11" method="post">
        <h1 class="formstext">Apply</h1>
        <hr />
        <div class="name-div">
          <div>
            <label class="name-l"></label>
          </div>
          <input
            class="username"
            type="text"
            name="name"
            placeholder="Name"
            required
          />
        </div>
        <div class="lastname-div">
          <div>
            <label class="lastname-l"></label>
          </div>
          <input
            class="lastname lastname1"
            type="text"
            name="empLastName"
            placeholder="Last Name"
            required
          />
        </div>
        <div class="lastname-div">
          <div>
            <label class="lastname-l"></label>
          </div>
          <input
            class="lastname jobposition"
            type="text"
            name="jobPosition"
            placeholder="Job Position"
            required
          />
        </div>
        <div class="lastname-div">
          <div>
            <label class="lastname-l"></label>
          </div>
          <input
            class="lastname phone"
            type="number"
            name="phone"
            placeholder="Phone Number"
            required
          />
        </div>
    
        <div class="lastname-div">
          <div>
            <label class="email-l"></label>
          </div>
          <input
            class="lastname email"
            type="email"
            name="email"
            placeholder="Email"
            required
          />
        </div>
      
        <div <div class="sub">
          <input class="submit_btn" type="submit" value="Submit" />
        </div>
      </form>
    </div>
    <footer>
      <div class="foot">
   <div class="first1">
              <a class="ele"> +1 234 567 8900</a>
              <a class="ele"> needhelp@company.com</a></td>
              <a class="ele"> Broklyn golden street new york</a>
            </div>
        <div class="copyright">
          <a class="copyR">Copyright © 2022 JobManagement. All Rights Reserved.</a>
      </div>
    </footer>
    <?php
    include "../database/database_con.php";
   // error_reporting(0);
    include_once '../database/database_con.php';
    //echo "Connected successfully";
    $sql = 'SELECT id_user FROM accounts.applications;';
     
    //make query & get results
      $result = mysqli_query($conn, $sql);

      //fetch the resulting rows as an array
      $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result from memory
      mysqli_free_result($result);
      $id=count($users)+1;
      echo $id;
      
    
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $empLastName = $_POST['empLastName'];
      $jobPosition = $_POST['jobPosition'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $sql = "INSERT INTO `accounts`.`applications` (`id_user`, `username`, `empLastName`, `jobPosition`, `phone`, `email`) VALUES ('$id','$name', '$empLastName', '$jobPosition', '$phone', '$email')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
      //  echo "<script>alert('Your application has been submitted successfully!')</script>";
      } else {
       // echo "<script>alert('Your application has not been submitted successfully!')</script>";
      }
    }
    ?>
    <script src="careerform.js"></script>

  
  </body>
</html>
