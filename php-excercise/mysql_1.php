<?php
$servername = "localhost";
$username = "root";
$password = "Vonnue@1234#";

// create connection
$conn = mysqli_connect($servername,$username,$password);

// check connection 

if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}

// create database 

$sql = "CREATE DATABASE nivya";
if (mysqli_query($conn, $sql)) {
  echo "Database nivya created successfully";
}
else{
  echo "Error creating database:" . mysqli_error($conn);
}
mysqli_close($conn);
?>