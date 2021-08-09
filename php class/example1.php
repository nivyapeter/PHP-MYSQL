<?php
// classes

class User {
  public $email;
  public $name;

  public function __construct($name,$email){
    // $this->email = 'nivyapeter94@gmail.com';
    // $this->name = 'nivya';
       $this->email = $email;
       $this->name = $name;

  }
  
  public function login() {
    echo $this->name = 'logged in';
  }
}
// $userone = new User();
// $userone->login();
// echo $userone->email;

$usertwo = new User('Anna','anna@gmail.com');
echo $usertwo->name;

?>