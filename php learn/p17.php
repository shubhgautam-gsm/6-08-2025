<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
 
function myTest() {
  global $x; // access global variable $x
  echo "<p>Variable x inside function is: $x</p>";
} 
for($i=0;$i<16;$i++){
myTest();
}
echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>
