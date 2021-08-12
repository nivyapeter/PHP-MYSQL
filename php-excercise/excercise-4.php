<!DOCTYPE html>
<html>
<body>
<title></title>
<h3>Please enter the name:</h3>
<form method="post">
<input type="text" name="name">
<input type="submit" value="submit">
</form>
<?php
$name = $_POST['name'];
echo "hello $name";
?>

</body>

</html>