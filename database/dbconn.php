<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../homePage/homePage.css" />
    <link rel="stylesheet" href="dbconn.css" />
        <title>JobManager</title>
    <link rel="icon" type="image/png" href="../images/icon.png" />
</head>
<body>
<header>
      <nav>
        <ul>
          <li class="first logout">
            <a href="http://localhost:3000/JobManagement/login/validation.php" class="first">Logout</a>
          </li>
          <li>|</li>
          <li class="first options">
            <a href="http://localhost:3000/JobManagement/options/options.php" class="">Profile</a>
          </li>
          <li>|</li>
          <li class="first">
            <a href="../database/dbconn.php">Users</a>
          </li>
       
          <li>|</li>
          <li class="first"><a href="../loggedin/admin.html">Home</a></li>
          <li></li>
          <li class="first"><a href="../career/career.html"></a></li>
          <li></li>
          <li class="first"><a href="../homePage/homePage.html"></a></li>
        </ul>
      </nav>
    </header>
    <?php
   include_once 'database_con.php';
        //  echo "Connected successfully";
          $sql = 'SELECT username,password_emp,empLastName,email,phone FROM accounts.users;';
           
          //make query & get result
            $result = mysqli_query($conn, $sql);

            //fetch the resulting rows as an array
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //free result from memory
            mysqli_free_result($result);

            //close connection
            mysqli_close($conn);
    
            echo "<table border='1'>
            <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            </tr>";
            $count=1;
            for($i=0;$i<count($users);$i++){
                echo "<tr>";
                echo "<td class='uname$count 'row$count''>" . $users[$i]['username'] . "</td>";
                echo "<td class='row1$count'>" .  $users[$i]['password_emp'] . "</td>";
                echo "<td class='row2$count'>" . $users[$i]['empLastName'] . "</td>";
                echo "<td class='row3$count'>" . $users[$i]['phone'] . "</td>";
                echo "<td class='row4$count'>" . $users[$i]['email'] . "</td>";
                echo "</tr>";
                $count++;

            }
            echo "</table>";
         
        
             //print_r($users[0]['username']);
          ?>
          
<script src="mark_user.js"></script>
</body>
</html>