<!DOCTYPE html>
<html>
<body>
<form action= "switch.php" method="post">
   <input type="text" name="grade">
   <input type="submit">
 </form>

<?php  
$grade = $_POST["grade"];
switch($grade) {
  case "A" :
    echo "You did amazing!";
    break;
  case "B":
    echo "You did pretty good";
    break;
    default:
    echo "Invalid grade";
}
?>  

</body>
</html>