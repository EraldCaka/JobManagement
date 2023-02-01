<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../homePage/homePage.css">
    <link rel="stylesheet" href="../homePage/hp-background.css" />
    <title>JobManager</title>
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
          <li class="first">
            <a href="http://localhost:3000/JobManagement/loggedinRecruiter/applications.php"
              >Applications</a
            >
          <li>|</li>
          <li class="first options">
            <a
              href="http://localhost:3000/JobManagement/loggedinRecruiter/recruiterHome.php"
              class=""
              >Home</a
            >
          </li>
        
          </li>
          <li></li>
          <li class="first">
            <a href="http://localhost:3000/JobManagement/loggedinRecruiter/recruiterHome.php"></a>
          </li>
          <li></li>
          <li class="first"><a href="../career/career.html"></a></li>
          <li></li>
          <li class="first"><a href="../homePage/homePage.html"></a></li>
        </ul>
      </nav>
    </header>
    <h1>Welcome</h1>
    <?php
      include '../database/database_con.php';
    ?>
       <script src="../check_user/check.js"></script>
       <script src="../loggedin/logout.js"></script>
</body>
</html>