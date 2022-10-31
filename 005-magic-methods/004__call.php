<?php
  class Person {
    public $phone;

    public function __call($name, $arguments) {
      if($name == 'getMobile') {
        return $this->getPhone();
      } else if($name == 'setMobile') {
        call_user_func_array([$this, 'setPhone'], $arguments);
      }
    }

    public function getPhone() {
      return $this->phone;
    }

    public function setPhone($phone) {
      $this->phone = $phone;
    }
  }

  $person = new Person();
  $person->setMobile('+8801943253440');
  echo $person->getMobile();
?>