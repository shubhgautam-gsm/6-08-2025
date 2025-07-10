<!DOCTYPE html>
<html>
<body>

<?php
$image_url = "mobile.jpg";
// same @gmail.com
echo substr($image_url, 0,-4),"\n";// start from index 3 end ...
$image_url = "pot.jpg";
echo substr($image_url, 0,-4);// start from index 3 end ...
// first(inclusive),second(exclusive)
?> 

</body>
</html>
