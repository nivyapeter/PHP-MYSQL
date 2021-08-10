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
 * slect table data
 * fetching data from database using mysqli_fetch_array() function and without table tag
 */

 //mysql query to select data from table
 $mysql_query_statement = "select *from users";
 $result = $conn->query($mysql_query_statement);