<?php
  class Person {
    public $phone;

    public function __invoke() {
      echo "object is called as a function";
    }
  }

  $person = new Person();
  var_dump(is_callable($person));
  echo $person();
?>