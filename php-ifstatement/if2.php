<!DOCTYPE html>
<html>
<body>

<?php  
function getmax($num1,$num2,$num3){
  if($num1 >= $num2 && $num1 >= $num3){
    return $num1;
  }elseif($num2 >= $num1 && $num2 >= $num3) {
    return $num2;
  }else {
    return $num3;
  }
}
echo getmax(300,90,400);
?>  

</body>
</html>