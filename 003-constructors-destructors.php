<?php
  class Car {
    private $color;
    private $weight;

    public function __construct($color, $weight) {
      $this->color = $color;
      $this->weight = $weight;
      echo 'I am created ' . $this->color . PHP_EOL;
    }

    public function __destruct() {
      echo 'I am destroyed ' . $this->color . PHP_EOL;
    }
  }

  $car1 = new Car('green', 20);
  $car2 = new Car('white', 40);
  unset($car1);
  sleep(2);
?>