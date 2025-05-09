<!DOCTYPE html>
<html>
<body>

<?php
$car = array("brand" => [
				"Ford",
				"Fiat" => ["red","yellow"]],
                "model"=>"Mustang",
                "year"=>1964
                );

 
  echo $car["brand"]["Fiat"][1]."<BR>" ;
  echo "Fiat Colors: " . implode(", ", $car["brand"]["Fiat"]);

?>

</body>
</html>
