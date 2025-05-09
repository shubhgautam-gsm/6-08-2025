<!DOCTYPE html>
<html>
<body>

<?php
 
function myTest() {
 // global $x; for access outside 
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>
