<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
          $sql = 'SELECT username,password_emp FROM accounts.users;';
           
          //make query & get result
            $result = mysqli_query($conn, $sql);

            //fetch the resulting rows as an array
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            print_r($users[0]);
          ?>

</body>
</html>