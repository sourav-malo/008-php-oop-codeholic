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
  $car1->color = 'Red';
  echo $car1->color . PHP_EOL;
  $car1->setYear(2020);
  echo $car1->getYear() . PHP_EOL;
?>