<?php
/**
 * @return array An array of two elements containing roots in any order
 */
function findRoots($a, $b, $c)
{
   
   $x1= ((-$b + sqrt($b*$b-4*$a*$c))/(2*$a));
   $x2= ((-$b - sqrt($b*$b-4*$a*$c))/(2*$a));
   return array($x1,$x2);
  
}

print_r(findRoots(2, 10, 8));