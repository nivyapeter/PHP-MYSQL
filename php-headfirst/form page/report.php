<html>

<head>

  <title>Allens Abducted me</title>
</head>

<body>
  <form action="report.php" method="POST">
    <label for="firstname">first name:</label>
    <input type="text" id="firstname" name="firstname">
    <label for="e-mail">e-mail:</label>
    <input type="text" id="e-mail" name="e-mail">
  </form>
<?php
  $first_name = $_POST('first name');
  $email = $_POST('email');


  echo "your first name is" .  $first_name;
  echo "and your mail is" . $email;
  ?>

</body>

</html>