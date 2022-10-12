<?php
  class Person {
    public $name;

    public function __set($propName, $value) {
      if($propName == 'username') {
        $this->name = $value;
      }

      return $propName . ' doesn\'t exist';
    }
  }

  $person = new Person();
  $person->username = 'Salah';
  echo $person->name;
?>