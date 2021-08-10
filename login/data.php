<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Login form</title>
  </head>
  <body>

<h2>Welcome to Online Exam</h2>
<a class="atext" href="question.php" action="question.php" method="POST">click here to start<i class='fas fa-arrow-right'></i></a>

<?php
/**
 * create database connection
 */

 $database_server = 'localhost';
 $database_username = 'root';
 $database_password = 'Vonnue@1234#';
 $database_name = 'logindb';
 
 //create connection using mysqli_connect()

 $conn = mysqli_connect($database_server,$database_username,$database_password,$database_name);

 //if $conn is false , connection is failed
//  if (!$conn) {
//    die("failed to connect to mysql: " . mysqli_connect_error());
//  }
//  echo "database connected successfully. <br />";
//  ?>

<?php

/**
 * insert data into table
 */

 //mysql wuery to insert record tnto table


 $mysql_query_statement = "INSERT INTO firsttable (username,password)
	VALUES ('Ram', 'Ram@123'),
	('Sanjay', 'Sanjay@123'),
	('Pankit', 'Pankit@123')";
  $result = $conn->query($mysql_query_statement);
  // if ($result === TRUE) {
  //   echo "Records inserted successfully.";
  // }
  // else {
  //   echo "Error inserting records:" .$conn->error;
  // }
  //connection close
  mysqli_close($conn);
  ?>
  <?php
  $username = $_POST["username"];
  $password = $_POST["password"];

  
?>
 

 </body>
</html>
  
