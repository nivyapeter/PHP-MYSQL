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

 if (!$conn ) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// echo "Database Connected Successfully.";

?>
