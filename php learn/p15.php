<!DOCTYPE html>
<html>
<body>

<?php
$car = array(
        "brand" => [
				  "Ford",
          "Toyota",
          "Fiat" => ["red","yellow"]
        ],
        "model"=>"Mustang",
        "year"=>1964
                );

 
  // echo $car["brand"]["Fiat"][1]."<BR>" ;
  echo $car[0]."<BR>" ;


?>

</body>
</html>
