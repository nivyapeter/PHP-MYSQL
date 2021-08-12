<?php
/**
 * create database connection
 */

 $database_server = 'localhost';
 $database_username = 'root';
 $database_password = 'Vonnue@1234#';
 $database_name = 'mydb';
 
 //create connection using mysqli_connect()

 $conn = mysqli_connect($database_server,$database_username,$database_password,$database_name);

 //if $conn is false , connection is failed
 if (!$conn) {
   die("failed to connect to mysql: " . mysqli_connect_error());
 }
 echo "database connected successfully. <br />";
 ?>

<?php

/**
 * insert data into table
 */

 //mysql wuery to insert record tnto table


 $mysql_query_statement = "INSERT INTO users (name, mobile, email)
	VALUES ('Ram', '9898989898', 'ram@gmail.com'),
	('Sanjay', '9898969696', 'sanjay@gmail.com'),
	('Pankit', '9898979797', 'pankit@gmail.com')";
  $result = $conn->query($mysql_query_statement);
  if ($result === TRUE) {
    echo "Records inserted successfully.";
  }
  else {
    echo "Error inserting records:" .$conn->error;
  }
  //connection close
  mysqli_close($conn);
  ?>

