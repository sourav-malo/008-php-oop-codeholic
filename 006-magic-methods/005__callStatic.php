<?php
  class Person {
    public $phone;

    public static function __callStatic($name, $arguments) {
      echo "static method {$name} was called!";
    }
  }

  Person::hello();
?>