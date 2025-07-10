<!DOCTYPE html>
<html>
<body>
<?php
function myTest() {
 $x = 5; // local scope

  // using x inside this function will generate an error
  echo "<h1>Variable x inside function is: $x</h1>";
} 
 myTest();
?>

</body>
</html>
