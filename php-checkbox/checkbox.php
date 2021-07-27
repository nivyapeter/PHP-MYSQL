<!DOCTYPE html>
<html>
<body>
<form action= "checkbox.php" method="post">
   Apples: <input type="checkbox" name="fruits[]" value="apple" <br>
   Orrange: <input type="checkbox" name="fruits[]" value="orrange" <br>
   Pinapple: <input type="checkbox" name="fruits[]" value="pinapple" <br>
   <input type="submit">
 </form>

 <?php 
 $fruits = $_POST["fruits"];
 echo $fruits[2]; 
 ?> 

</body>
</html>
