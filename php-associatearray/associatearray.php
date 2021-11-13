<!DOCTYPE html>
<html>
<body>
<form action= "associatearray.php" method="post">
  <!-- <input type="text" name="student">
  
   <input type="submit"> -->
 </form>
 <?php 
 $grades = array("jim" => "A+","Oscar" =>"B+","sonu" => "C+");
 echo $grades[$_POST["student"]];
 ?> 

</body>
</html>
