<?php      
    $host = "localhost";  
    $user = "root";  
    $password = 'Vonnue@1234#';  
    $db_name = "studentdb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  