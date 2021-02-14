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
 $dbServename = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName = "todo_app";

 //create connection
 $conn = mysqli_connect($dbServename, $dbUsername, $dbPassword, $dbName); 
 
 if (mysqli_connect_errno()) {
     echo "<h1>Failed to connect!</h1>";
     exit();
 }
 echo "<h1>Connection successful!</h1>" ; 
?>
</body>
</html>