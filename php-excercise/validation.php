<!DOCTYPE html>
<html>
<body>
<!-- submit button validation -->
<?php
if(!$_POST['submit']){
  print ' please submit the form';
}
?>

<form>
  <label>E-mail: </label>
  <input type="text" required>
  <button type="submit">Submit</button>
</form>
<?php
if(!$_POST['E-mail']){
  print ' please enter the e-mail';
}
?>

</body>
</html>