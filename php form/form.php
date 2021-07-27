<!DOCTYPE html>
<html>
<body>
<form action= "form.php" method="get">
   Name: <input type="text" name="name">
   age: <input type="number" name="number">
   <input type="submit">
 </form>
 <br>

 <?php 
 echo $_GET["name"]
 ?>  
 <?php 
 echo $_GET["number"]
 ?>  

</body>
</html>
