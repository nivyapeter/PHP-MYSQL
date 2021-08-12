<!DOCTYPE html>
<html>
<body>

<?php  
function getmax($num1,$num2){
  if($num1 > $num2){
    return $num1;
  }else {
    return $num2;
  }
}
echo getmax(300,90);
?>  

</body>
</html>