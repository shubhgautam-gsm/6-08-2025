<!DOCTYPE html>
<html>
<body>
<?php
function myTest() {
 static $x = 5; 
 echo "<h1>Variable x inside function is: $x</h1>";
 $x++;
} 
 myTest();
 myTest();
 myTest();
 myTest();
?>

</body>
</html>
