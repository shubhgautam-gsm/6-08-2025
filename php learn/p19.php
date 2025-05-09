<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;
//$y=$y+$x;

//overide
function myTest() {
  //global $x,$y;
  //$y=$x+$y;
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  //$y=15
} 

myTest();
echo $y;
?>

</body>
</html>
