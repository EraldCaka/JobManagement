<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobManager</title>
    <link rel="icon" type="image/png" href="../images/icon.png" />
    <link rel="stylesheet" href="../homePage/homePage.css" />
  </head>
  <body>

    <header>
      <nav>
        <ul>
          <li class="first"><a href="login.html">Login</a></li>
          <li>|</li>
          <li class="first">
            <a href="../contacts/contacts.html">Contacts</a>
          </li>
          <li>|</li>
          <li class="first"><a href="../about-us/aboutUs.html">About Us</a></li>
          <li>|</li>
          <li class="first"><a href="../career/career.html">Career</a></li>
          <li>|</li>
          <li class="first"><a href="../homePage/homePage.html">Home</a></li>
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
  

    <?php
    //  
    error_reporting(0);
  $servername = "localhost";
  $username="root";
  $password = "alesio1234";
  $dbname = "accounts";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
    $sql = 'SELECT username,password_emp,empLastName,email,phone FROM accounts.users;';
     
    //make query & get result
      $result = mysqli_query($conn, $sql);

      //fetch the resulting rows as an array
      $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result from memory
      mysqli_free_result($result);

      //close connection
      mysqli_close($conn);
     // for($i =0 ; $i< count($users); $i++){
        //echo $users[$i]['username'];
      //  }
      
?>
     <script src="validation.js"></script>
  <?php

   $user_name= $_GET['username']; 
   $pass_word= $_GET['password'];
 
    for($i =0 ; $i< count($users); $i++){
     if($user_name == $users[$i]['username'] && $pass_word == $users[$i]['password_emp']){
        header("Location:http://localhost:3000/JobManagement/loggedin/admin.html");
        exit();
     }
    }
   ?>

  </body>
</html>
