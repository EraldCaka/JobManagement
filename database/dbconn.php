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
          $sql = 'SELECT username,password_emp,empLastName,email,phone,user_type,jobPosition FROM accounts.users;';
           
          //make query & get result
            $result = mysqli_query($conn, $sql);

            //fetch the resulting rows as an array
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //free result from memory
            mysqli_free_result($result);

    
             //print_r($users[0]['username']);
          ?>


          <?php
     
          //  if(isset($_GET['searchbtn'])){
              $searchname = $_GET['searchname'];
              echo $searchname;
              echo "<table border='1'>
              <tr>
              <th>Username</th>
              <th>Last Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Type</th>
              <th>Position</th>
              </tr>";
              $count=1;
              for($i=0;$i<count($users);$i++){
              if(str_contains($users[$i]['username'],$searchname)){
                  echo "<tr>";
                  echo "<td class='uname$count 'row$count''>" . $users[$i]['username'] . "</td>";
               
                  echo "<td class='row2$count'>" . $users[$i]['empLastName'] . "</td>";
                  echo "<td class='row3$count'>" . $users[$i]['phone'] . "</td>";
                  echo "<td class='row4$count'>" . $users[$i]['email'] . "</td>";
                  echo "<td class='row5$count'>" . $users[$i]['user_type'] . "</td>";
                  echo "<td class='row6$count'>" . $users[$i]['jobPosition'] . "</td>";
                 // echo "<form method=`'get'`>";
                //  echo "<td class='row7$count'><button name=`remove`>Remove</button></td>";
                  //echo "</form>";
                  echo "</tr>";
           
                  $count++;
                }
              
             }
              echo "</table>";
              
          //  }
    
          ?>
                    <form method="get">
            <div> 
            <div>
          <input type="text" class="searchname" name="searchname" placeholder="search user">
          </div>
          <div>
          <button type="submit" class="searchbtn" name="searchbtn" >Search</button>
          </div>
          </div>
          </form>
          
<script src="mark_user.js"></script>
<script src="../loggedin/logout.js"></script>
<script src="../check_user/check.js"></script>
</body>
</html>