<?php

$host = "localhost";
$user = "root";
$pass = "Vonnue@1234#";
$database  = "db1";

// create connection
$connection = mysqli_connect($host, $pass , $database);

if($connection){
  echo "successfully connected <br>";
}else{
  die("could not connected");
}

