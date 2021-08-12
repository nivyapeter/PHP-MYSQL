<!-- maximum and minimum value-->
<?php
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
$max_mark = max(max($marks1), max($marks2),max($marks3));
$min_mark = min(min($marks1), min($marks2),min($marks3));
echo $max_mark,"\n";
echo $min_mark;
?>