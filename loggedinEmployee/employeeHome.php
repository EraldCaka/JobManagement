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
          <li class="first options">
            <a
              href="http://localhost:3000/JobManagement/loggedinEmployee/employeeHome.php"
              class=""
              >Home</a
            >
          </li>
          <li></li>
          <li class="first">
            <a href="http://localhost:3000/JobManagement/"
              ></a
            >
          </li>
          <li></li>
          <li class="first">
            <a href=""></a>
          </li>
          <li></li>
          <li class="first"><a href="../career/career.html"></a></li>
          <li></li>
          <li class="first"><a href="../homePage/homePage.html"></a></li>
        </ul>
      </nav>
    </header>
    <h1>Welcome lotig1123</h1>
    <?php
      include '../database/database_con.php';
    ?>
     <script src="../loggedin/logout.js"></script>
     <script src="../check_user/check.js"></script>
</body>
</html>