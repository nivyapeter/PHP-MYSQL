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
 * create database table
 */

 //mysql query to create  table

 $mysql_query_statement = "CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	mobile VARCHAR(10) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE
)";
if ($conn->query($mysql_query_statement)==TRUE){
  echo "table users created successfully.";
}
else {
  echo "Error creating table: " . $conn->error;
}
//connection close 
mysqli_close($conn);


