<?php
  class Person {
    public $name;
    public $phone;

    public function __construct($name, $phone) {
      $this->name = $name;
      $this->phone = $phone;
    }

    public function __sleep() {
      unset($this->name);
      return ['phone'];
    }

    public function __wakeup() {
      echo "I am waking up" . PHP_EOL;
    }
  }

  $person = new Person('Sourav', '+8801303458829');
  $serializedPerson = serialize($person);
  var_dump($serializedPerson);
  $unserializedPerson = unserialize($serializedPerson);
  var_dump($unserializedPerson);
?>