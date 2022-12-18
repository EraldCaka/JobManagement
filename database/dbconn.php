<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../homePage/homePage.css" />
    <link rel="stylesheet" href="dbconn.css" />
    <link rel="icon" type="image/png" href="../images/icon.png" />
</head>
<body>
<header>
      <nav>
        <ul>
          <li class="first logout">
            <a href="" class="../login/login.html">Logout</a>
          </li>
          <li>|</li>
          <li class="first">
            <a href="../database/dbconn.php">Users</a>
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
    <?php
        $servername = "localhost";
        $username="root";
        $password = "alesio1234";
        $dbname = "accounts";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          echo "Connected successfully";
          $sql = 'SELECT username,password_emp,empLastName,email,phone FROM accounts.users;';
           
          //make query & get result
            $result = mysqli_query($conn, $sql);

            //fetch the resulting rows as an array
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //free result from memory
            mysqli_free_result($result);

            //close connection
            mysqli_close($conn);
            //echo "<br>";
           // for($i=0;$i<count($users);$i++){
           //     echo $users[$i]['username'] , " " , $users[$i]['password_emp'], " " , $users[$i]['empLastName'] , " " , $users[$i]['phone'], " " , $users[$i]['email'];
           //     echo "<br>";
           // }
            echo "<table border='1'>
            <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            </tr>";
            for($i=0;$i<count($users);$i++){
                echo "<tr>";
                echo "<td>" . $users[$i]['username'] . "</td>";
                echo "<td>" . $users[$i]['password_emp'] . "</td>";
                echo "<td>" . $users[$i]['empLastName'] . "</td>";
                echo "<td>" . $users[$i]['phone'] . "</td>";
                echo "<td>" . $users[$i]['email'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            //print_r($users[0]['username']);
          ?>

</body>
</html>