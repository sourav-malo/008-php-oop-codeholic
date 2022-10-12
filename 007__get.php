<?php
  class Person {
    public $name;

    public function __construct($name) {
      $this->name = $name;
    }

    public function __get($propName) {
      if($propName == 'username') {
        return $this->name;
      }

      return $propName . ' doesn\'t exist';
    }
  }

  $person = new Person('Salah');
  echo $person->username;
?>