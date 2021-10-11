<?php

$database_server = "localhost";
$database_user = "root";
$database_password = "Vonnue@1234#";
$database_name = "data";


// connection
 
$conn = mysqli_connect($database_server,$database_user,$database_password,$database_name);
if($conn) {
  $sql = "select * from datatable";
  $result=mysqli_query($conn,$sql);
  if($result){
    header('Content-Type:json');
    $i=0;
    while($row = mysqli_fetch_assoc($result)){
      $response[$i]['id'] = $row ['id'];
      $response[$i]['name'] = $row ['name'];
      $response[$i]['age'] = $row ['age'];
      $response[$i]['email'] = $row ['email'];
      $i++;
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
  }
  else {
    echo "DB is not connected";
  }
}


?>
