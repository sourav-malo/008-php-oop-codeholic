<?php
  class Person {
    public $name;
    public $phone;

    public function __construct($name, $phone) {
      $this->name = $name;
      $this->phone = $phone;
    }

    public function __clone() {
      var_dump($this);
    }
  }

  $person = new Person('Sourav', '+8801303458829');
  $person2 = clone $person;
?>