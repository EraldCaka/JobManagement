

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobManager</title>
    <link rel="stylesheet" href="../homePage/homePage.css" />
    <link rel="stylesheet" href="../options/options.css" />
    <link rel="icon" type="image/png" href="../images/icon.png" />
  </head>
  <body>

    <header>
      <nav>
        <ul>
          <li class="first logout">
            <a href="http://localhost:3000/JobManagement/login/validation.php" class="identification">Logout</a>
          </li>
          <li>|</li>
          <li class="first options">
            <a href="http://localhost:3000/JobManagement/options/options.php" class="">Profile</a>
          </li>
          <li>|</li>
          <li class="first">
            <a href="http://localhost:3000/JobManagement/database/dbconn.php"
              >Users</a
            >
          </li>
          <li>|</li>
          <li class="first">
            <a href="../loggedin/admin.html">Home</a>
          </li>
          <li></li>
          <li class="first"><a href="../career/career.html"></a></li>
          <li></li>
          <li class="first"><a href="../homePage/homePage.html"></a></li>
        </ul>
      </nav>
    </header>
    <form name="frmUser" method="post" action="">
    <div class="container">
      <div class="profile">
       
        </div>
        <div class="profile_settings">
          <div class="el">
            <h1 class="username_profile">Name</h1>
            <input class="name1" name="username" placeholder="name">
          </div>
          <div class="el">
            <h1 class="username_profile">Last Name</h1>
            <input class="name2" name="empLastName" placeholder="lastname" >
          </div>
          <div class="el">
            <h1 class="username_profile">Password</h1>
            <input class="name3" name="password_emp" placeholder="password" type="password" >
          </div>
          <div class="el">
            <h1 class="username_profile">Email</h1>
            <input class="name4"  name="email" placeholder="email" type="email" >
          </div>
          <div class="el">
            <h1 class="username_profile">Phone Number</h1>
            <input class="name5" name="phone" placeholder="phone" >
          </div>
          <input class="edit_btn" name="update" type="submit"></input>
        </div>
      </div>
    </div>
    </form>
    <?php
    error_reporting(0);
    include_once '../database/database_con.php';
    include_once '../login/user_id.php';




if(isset($_POST['update'])){
  $username=$_POST['username'];
  $query = "UPDATE users SET username='" .$_POST['username']."', empLastName='".$_POST['empLastName']."', password_emp='".$_POST['password_emp']."', email='".$_POST['email']."',phone='".$_POST['phone']."' WHERE user_id='$user_id'";
  $query_run = mysqli_query($conn,$query);
  if($query_run)
  {
  }
  else
  {
    echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
  }
}
    ?>

    <script src="options.js"></script>
  </body>
</html>
