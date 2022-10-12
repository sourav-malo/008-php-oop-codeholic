<?php
  class Car {
    private $color;
    private $weight;

    public function __construct($color, $weight) {
      $this->color = $color;
      $this->weight = $weight;
    }

    public function __toString() {
      return 'Color: ' . $this->color . ' Weight: ' . $this->weight . PHP_EOL;
    }
  }

  $car = new Car('red', 20);
  echo $car;
?>