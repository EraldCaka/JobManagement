<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobManager</title>
    <link rel="icon" type="image/png" href="../images/icon.png" />
    <link rel="stylesheet" href="../homePage/homePage.css" />
    <link rel="stylesheet" href="validation.css" />
  </head>
  <body>
<?php
session_start();
?>
    <header>
      <nav>
        <ul>
          <li class="first"><a href="http://localhost:3000/JobManagement/login/validation.php">Login</a></li>
          <li>|</li>
          <li class="first">
            <a href="../contacts/contacts.html">Contacts</a>
          </li>
          <li>|</li>
          <li class="first"><a href="../about-us/aboutUs.html">About Us</a></li>
          <li>|</li>
          <li class="first"><a href="../career/career.html">Career</a></li>
          <li>|</li>
          <li class="first"><a href="http://localhost:3000/JobManagement/homePage/homePage.php">Home</a></li>
        </ul>
      </nav>
    </header>
 
    <div class="login">
      <form class="form1" method="get">
        <h1 class="formstext">Login</h1>
        <hr />
        <div class="username-div">
          <div>
            <label class="username-l"></label>
          </div>
          <input
            class="username"
            type="text"
            name="username"
            placeholder="Username"
            required
          />
        </div>
        <div class="password-div">
          <div>
            <label class="password-l"></label>
          </div>
          <input
            class="password"
            type="password"
            name="password"
            placeholder="Password"
            required
          />
        </div>
        <div class="sub">
          <a
            href="http://localhost:3000/JobManagement/login/validation.php"
            class="identification"
          >
            <input class="submit" type="submit" value="Login" />
          </a>
        </div>
        <div class="create">
          <a href="register.html" class="newacc">Create a new account</a>
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
    /*

    */
    //  
    error_reporting(0);
    include_once '../database/database_con.php';
    //echo "Connected successfully";
    $sql = 'SELECT user_id,username,password_emp,empLastName,email,phone,user_type FROM accounts.users;';
     
    //make query & get results
      $result = mysqli_query($conn, $sql);

      //fetch the resulting rows as an array
      $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result from memory
      mysqli_free_result($result);

      //close connectionn
  
     // for($i =0 ; $i< count($users); $i++){
        //echo $users[$i]['username'];
      //  }
      
?>
    
  <?php

   $user_name= $_GET['username']; 
   $pass_word= $_GET['password'];
 
$_SESSION['user_id']="";
 
    for($i =0 ; $i< count($users); $i++){
   
     if($user_name == $users[$i]['username'] && $pass_word == $users[$i]['password_emp']){
 
     $user_id=$users[$i]['user_id'];
       
    
      if($users[$i]['user_type'] == "admin"){
        echo "You are logged in",$user_id;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_type'] = $users[$i]['user_type'];
        header("Location:http://localhost:3000/JobManagement/loggedin/admin.html");
        exit();
      }
      if($users[$i]['user_type'] == "recruiter"){
        echo "You are logged in",$user_id;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_type'] = $users[$i]['user_type'];
        header("Location:http://localhost:3000/JobManagement/loggedinRecruiter/recruiterHome.php");
        exit();
      }
      if($users[$i]['user_type'] == "employee"){
        echo "You are logged in",$user_id;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_type'] = $users[$i]['user_type'];
        header("Location:http://localhost:3000/JobManagement/loggedinEmployee/employeeHome.php");
        exit();
      }
      else{
        echo "You are not logged in";

      }
     
     }
    } 

   ?>
 <script src="validation.js"></script>
  </body>
</html>
