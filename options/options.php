

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobManager</title>
    <link rel="stylesheet" href="../homePage/homePage.css" />
    <link rel="stylesheet" href="options.css" />
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
          <h1 class="prp">Profile</h1>
          <div class="el">
           <a class="n1 b">Username</a>
            <input class="name1 inp" name="username" placeholder="name">
          </div>
          <div class="el">
          <a class="n2 b">Lastname</a>
            <input class="name2 inp" name="empLastName" placeholder="lastname" >
          </div>
          <div class="el">
          <a class="n3 b">Password</a>
            <input class="name3 inp pass" name="password_emp" placeholder="password" type="password" >
            <input type="checkbox" class="reveal" onclick="myFunction()">
          </div>
          <div class="el">
          <a class="n4 b">Email</a>
            <input class="name4 inp"  name="email" placeholder="email" type="email" >
          </div>
          <div class="el">
          <a class="n5 b">Phone</a>
            <input class="name5 inp" name="phone" placeholder="phone" >
          </div>
          <input class="edit_btn" name="update" type="submit" value="Save"></input>
        </div>
      </div>
    </div>
    </form>
    <?php
    error_reporting(0);
    include_once '../database/database_con.php';
    include_once '../login/user_id.php';

//echo $user_id;
    $query = "SELECT * FROM users WHERE user_id='$user_id'";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run))
    {
      ?>
      <script>
        document.frmUser.username.value="<?php echo $row['username']; ?>";
        document.frmUser.empLastName.value="<?php echo $row['empLastName']; ?>";
        document.frmUser.password_emp.value="<?php echo $row['password_emp']; ?>";
        document.frmUser.email.value="<?php echo $row['email']; ?>";
        document.frmUser.phone.value="<?php echo $row['phone']; ?>";
      </script>
      <?php
    }


if(isset($_POST['update'])){
  $username=$_POST['username'];
  $query = "UPDATE users SET username='" .$_POST['username']."', empLastName='".$_POST['empLastName']."', password_emp='".$_POST['password_emp']."', email='".$_POST['email']."',phone='".$_POST['phone']."' WHERE user_id='$user_id'";
  $query_run = mysqli_query($conn,$query);
  if($query_run)
  {
    header("Location:http://localhost:3000/JobManagement/options/options.php");
  exit();
  }
  else
  {
    echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
  }
}
    ?>

    <script src="options.js"></script>
    <script src="../loggedin/logout.js"></script>
    <script src="../check_user/check.js"></script>
  </body>
</html>
