<?php
// classes


class School {
  public $studentname;
  public $class;
  public $rollno;
  public $classteacher;
  public $school;
  public $place;


  public function __construct($studentname,$class,$rollno,$classteacher,$school,$place){
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
   public function message() {
     echo "DBDO students details";
     echo "<br>";
   }
 
}

$student= new Oft('vyshnav','plus one','1234','Nivya k Peter','GVHS(THS)','sulthan bathery');
echo $student->message();
echo $student-> displaystudentdetails();
echo "<br>"

// $student2= new Dbdo('Shyam','plus one','DBDO');
// echo $student2-> message();
// echo $student2-> displaystudentdetails();

?>