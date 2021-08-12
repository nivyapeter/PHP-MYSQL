# Syntax of PHP Class

## Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

```

<?php
class Student
{
    // property declaration
    public $var = 'value123';

    // method declaration
    public function display() {
        echo $this->var;
    }
}
$s1=new Student();
$s1->display();
?>

```