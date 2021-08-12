<?php
// object orientedv programming
class Employee {
  // properties
  public $name;
  public $salary;
  // constructor
  public function __construct($name,$salary){
    $this->name=$name;
    $this->salary=$salary;

  }
  // function or method
  public function show_details()
{
  echo "Name = ".$this->name;
  echo "<br>";
  echo "Salary = ".$this->salary;
  echo "<br>";
}    
  
}

$e1 = new Employee("John",15000);
$e1->show_details();
$e2 = new Employee("Anil",25000);
$e2->show_details();

?>