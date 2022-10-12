<?php
  abstract class Shape {
    public $color;

    public function __construct($color) {
      $this->color = $color;
    }

    public abstract function getArea();
  }

  class Triangle extends Shape {
    public $height;
    public $base;

    public function __construct($color, $height, $base) {
      parent::__construct($color);
      $this->height = $height;
      $this->base = $base;
    }

    public function getArea() {
      return .5 * $this->height * $this->base;
    }
  }

  class Rectangle extends Shape {
    public $height;
    public $width;

    public function __construct($color, $height, $width) {
      parent::__construct($color);
      $this->height = $height;
      $this->width = $width;
    }

    public function getArea() {
      return $this->height * $this->width;
    }
  }

  $triangle = new Triangle('red', 5, 10);
  $rectangle = new Rectangle('red', 5, 10);
  echo $triangle->getArea() . PHP_EOL;
  echo $rectangle->getArea() . PHP_EOL;
?>