
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
 * create database table
 */

 //mysql query to create  table

//  $mysql_query_statement = "CREATE TABLE question1 (
// 	qid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// 	question VARCHAR(150) NOT NULL,
// 	answer VARCHAR(50) NOT NULL
// )";
// if ($conn->query($mysql_query_statement)==TRUE){
//   echo "table question1 created successfully.";
// }
// else {
//   echo "Error creating table: " . $conn->error;
// }
// //connection close 
// mysqli_close($conn);


// ?>
<?php

/**
 * insert data into table
 */

 //mysql query to insert record tnto table


 $mysql_query_statement = "INSERT INTO question1 (question,answer)
	VALUES ('What does PHP stand for?', 'Hypertext Preprocessor'),
	('All variables in PHP start with which symbol?', '$'),
	('What is the correct way to end a PHP statement?', ';')";
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

  