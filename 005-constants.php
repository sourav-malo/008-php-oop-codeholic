<?php
  class Car {
    public $color;
    public $weight;

    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';
    const COLOR_BLUE = 'blue';

    public function __construct($color, $weight) {
      $this->color = $color;
      $this->weight = $weight;
    }
  }

  $car = new Car(Car::COLOR_RED, 20);
  var_dump($car);
?>
