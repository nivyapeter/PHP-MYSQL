
 <!-- session_start();
 //connect to database
 $conn = mysqli_connect($database_server,$database_username,$database_password,$database_name);

  if(isset($_POST['login_btn'])) {
    // session_start();
    $username =$mysqli->real_escape_string($_POST('username'));
    $password = $mysqli->real_escape_string($_POST['password']);

    $password = md5($password);
    $sql= "select * from firsttable where username='$username' and password='$password'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) ==1) {
      $_SESSION['message'] = "You are logged in";
      $_SESSION['username'] = $username;
      header("location: welcome.php");
    }else{
      $_SESSION['message'] = "username/password combination incorrect";
    }
  } -->
  <?php
  
  if(isset($POST['username']) && isset($_POST['password']))
  {
    // $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)) {
      header("Location: login.php:error=username is required");
    }else if (empty($password)){
      header("Location: login.php?error=Password is required");
    }else {
      echo "Good!";
    }
  }
  
  
  
  
  
  ?>