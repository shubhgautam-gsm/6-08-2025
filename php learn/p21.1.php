<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++; 
  //$x=1;
}
for($i=0;$i<3;$i++){

myTest();
echo "<br>";
}

?> 

</body>
</html>
