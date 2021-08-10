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

 $mysql_query_statement = "CREATE TABLE question1 (
	qid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	question VARCHAR(150) NOT NULL,
	answer VARCHAR(50) NOT NULL
)";
if ($conn->query($mysql_query_statement)==TRUE){
  echo "table question1 created successfully.";
}
else {
  echo "Error creating table: " . $conn->error;
}
//connection close 
mysqli_close($conn);


?>
<?php

/**
 * insert data into table
 */

 //mysql wuery to insert record tnto table


 $mysql_query_statement = "INSERT INTO question1 (question,answer)
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