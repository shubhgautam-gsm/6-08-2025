<!DOCTYPE html>
<html>
<body>

<?php


function myTest() {
 $x = 5;
 $y = 10;
  $GLOBALS['y'] = $x + $y;
} 

myTest();
echo $y;
?>

</body>
</html>
