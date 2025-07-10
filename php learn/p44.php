<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello,World!";
$y = explode(" ", $x);
print_r($y);

$y = explode("o", $x);//split()

//Use the print_r() function to display the result:
print_r($y);
?> 

</body>
</html>
