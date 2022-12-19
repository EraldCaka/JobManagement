<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobManager</title>
    <link rel="stylesheet" href="../homePage/homePage.css" />
    <link rel="icon" type="image/png" href="../images/icon.png" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li class="first logout">
            <a href="" class="identification">Logout</a>
          </li>
          <li>|</li>
          <li class="first">
            <a href="http://localhost:3000/JobManagement/database/dbconn.php"
              >Users</a
            >
          </li>
          <li></li>
          <li class="first"><a href="../about-us/aboutUs.html"></a></li>
          <li></li>
          <li class="first"><a href="../career/career.html"></a></li>
          <li></li>
          <li class="first"><a href="../homePage/homePage.html"></a></li>
        </ul>
      </nav>
    </header>
    <h1 class="welcome">Welcome</h1>
    <?php
    echo "Welcome " . $_SESSION['username'] . " ! ";
    ?>
    <script src="logout.js"></script>
    <script src="firstProcess.js"></script>
  </body>
</html>
