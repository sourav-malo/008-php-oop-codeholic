<?php
  class Car {
    private static $availableColors = ['red', 'green', 'blue', 'white'];

    public static function getAvailableColors() {
      return Car::$availableColors;
    }
  }

  var_dump(Car::getAvailableColors());
?>
