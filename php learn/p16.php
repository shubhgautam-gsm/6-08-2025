<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
 
function myTest() {
  $x ; // local scope
    //global $x; // access global variable $x
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();
myTest();
myTest();
myTest();
myTest();
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>
