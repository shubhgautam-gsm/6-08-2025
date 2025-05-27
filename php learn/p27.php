<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

// Car={

// }
// Car.model='a55fsz'
// Car.color='red'

$volvo = new Car("red", "Volvo");
$bmw = new Car("green", "bmw");
var_dump($volvo->model);
?>

</body>
</html>
