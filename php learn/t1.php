<!DOCTYPE html>
<html>
<body>
<?php
$x = 5; // global scope
 
function myTest() {
 global $x;

  // using x inside this function will generate an error
  echo "<h1>Variable x inside function is: $x</h1>";
} 
myTest();
myTest();
myTest();
myTest();
myTest();

?>

</body>
</html>
