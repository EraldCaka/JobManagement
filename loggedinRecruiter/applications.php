<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../homePage/homePage.css">
    <title>JobManager</title>
    <link rel="icon" type="image/png" href="../images/icon.png" />
    <link rel="stylesheet" href="applications.css">

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
    <body>

             <?php
              error_reporting(0);
   include_once '../database/database_con.php';
        //  echo "Connected successfully";
          $sql = 'SELECT id_user,username,empLastName,jobPosition,email,phone,email FROM accounts.applications;';
          $sql1 = 'SELECT user_id FROM accounts.users;';
          //make query & get result
            $result = mysqli_query($conn, $sql);
            $result1 = mysqli_query($conn, $sql1);
            //fetch the resulting rows as an array
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $users1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
            $userCount=count($users1)+1;
            echo '<script>localStorage.setItem("usersLen",'.count($users).');</script>;';
        //free result from memory
            mysqli_free_result($result);


             //print_r($users[0]['username']);
          ?>


          <?php
     
        //    if(isset($_GET['searchbtn'])){
              $searchname = $_GET['searchname'];
              //echo $searchname;
              echo "<table border='1'>
              <tr>
              
              <th>name</th>
              <th>Last Name</th>
              <th>Job Position</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Approval</th>
             
              </tr>";
              $count=1;

              
              for($i=0;$i<count($users);$i++){
           if(str_contains($users[$i]['username'],$searchname)){
                  echo "<tr class='tr'>";
             
                  echo "<td class='uname$count 'row$count''>" . $users[$i]['username'] . "</td>";
                  echo "<td class='row$count'>" . $users[$i]['empLastName'] . "</td>";
                  echo "<td class='row$count'>" . $users[$i]['jobPosition'] . "</td>";
                  echo "<td class='row$count'>" . $users[$i]['email'] . "</td>";
                  echo "<td class='row$count'>" . $users[$i]['phone'] . "</td>";
                  echo "<form method='get'>";
                  $temp1=$users[$i]['username'];
                  echo "<td class='row$count column1'>
                  <button name='approve$count' class='searchbtn2$count searchbtn' value='$temp1'>Approve</button>
                  <button name='deny$count' class='searchbtn1$count searchbtn1'  value='$temp1'>remove</button>
                  </td>";
                  echo "</form>";
                  echo "</tr>";
           
                  $count++;
                }
              
             }
         
              echo "</table>";
          $start=false;
          $start_approval=false;
          for($i= 1 ; $i<count($users)+1;$i++){
         
            if(isset($_GET["deny$i"])){
          
              $temp=$_GET["deny$i"];
            //  echo $temp;
              $sql = "DELETE FROM applications WHERE username='$temp';";
              $result = mysqli_query($conn, $sql);
              if ($result) {
                $start=true;
                continue;
                
                } else {
              //  echo "<script>alert('Your application has not been submitted successfully!')</script>";
                }
          
            }
            if($start==true){
              $tempo=$i-1;
              $tempUsername=$users[$tempo]['username'];
            
                  $sql = "UPDATE applications set id_user='$tempo' WHERE username='$tempUsername';";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    //echo "<script>alert('Your application has been submitted lotig2 successfully!')</script>";
                 
                  } else {
                    //echo "<script>alert('Your application hasnt been submitted lotig2 successfully!')</script>";
                  }
                }

            if(isset($_GET["approve$i"])){
          
              $temp=$_GET["approve$i"];
             // echo $temp;
  
$userLN=$users[$i-1]['empLastName'];
echo $userLN;
$userJP=$users[$i-1]['jobPosition'];
$userEmail=$users[$i-1]['email'];
$userPhone=$users[$i-1]['phone'];

              $sql = "  INSERT INTO `accounts`.`users` (`username`,`empLastName`,`jobPosition`,`email`,`phone`,`user_id`,`user_type`,`password_emp`) 
             VALUE ('$temp','$userLN','$userJP','$userEmail','$userPhone','$userCount','employee','1234');
             
    ";


              
            $result = mysqli_query($conn, $sql);
              if ($result) {
                echo "<script>alert('Your application has not been submitted successfully!')</script>";
                $sql = "DELETE FROM applications WHERE username='$temp';";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  //echo "<script>alert('Your application has been submitted lotig2 successfully!')</script>";
                  $start=true;
                } else {
                  //echo "<script>alert('Your application hasnt been submitted lotig2 successfully!')</script>";
                }
            
                } else {
              
                }
         }
         
         
        }
         if($start==true){
          $start=false;
          header("Location: applications.php");
          
         }

    
          ?>
          <script>
            
            </script>
         <form method="get">
            <div> 
                <div>
                      <input type="text" class="searchname" name="searchname" placeholder="search user">
               </div>
                  <div>
                     <button type="submit" class="searchbtn_1" name="searchbtn">Search</button>
                 </div>
          </div>
   </form>
   <script src="application.js"></script>
   <script src="../check_user/check.js"></script>
   <script src="../loggedin/logout.js"></script>
</body>
</html>
