<?php
  class Car {
    public $color;
    public $weight;
    private $year;

    public function setYear($year) {
      $this->year = $year;
    }

    public function getYear() {
      return $this->year;
    }
  }

  $car1 = new Car();
  $car2 = clone $car1;
  $car2->color = 'red';
  var_dump($car1, $car2);
?>