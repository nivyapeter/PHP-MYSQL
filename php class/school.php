<?php
// classes


class School {
  public $studentname;
  public $class;
  public $rollno;
 
  public function __construct($studentname,$class,$rollno){
      $this->studentname = $studentname;
      $this->class= $class;
      $this->rollno= $rollno;
      

  }
 
  public function displaystudentdetails(){
    echo $this -> studentname ."<br> " . $this -> class ."<br> " . $this -> rollno;
  
  }
}
class Oft extends School {
    public function message(){
      echo "OFT students details";
      echo "<br>";
    }
    
}
class Dbdo extends School {
  public function message(){
    echo "DBDO students details";
    echo "<br>";
  }
  
}
  

$student1= new Oft('vyshnav','plus one','1234','Nivya k Peter','GVHS(THS)','sulthan bathery');

echo $student1->message();
echo $student1-> displaystudentdetails();
echo "<br>";

$student2= new Dbdo('Arjun','plus one','2341','Nivya k Peter','GVHS(THS)','sulthan bathery');
echo "<br>";
echo $student2->message();
echo $student2-> displaystudentdetails();
echo "<br>";


?>