<?php
  class Employee {
    public $id;
    public $name;
    public $age;

    public function __construct($id, $name, $age) {
      $this->id = $id;
      $this->name = $name;
      $this->age = $age;
    }

    protected function introduce() {
      echo "Hi, I am {$this->name}. I am {$this->age} years old." . PHP_EOL;
    }
  }

  class Developer extends Employee {
    public $developerRole;

    public const ROLE_FRONTEND_DEVELOPER = 'Front End Developer';
    public const ROLE_BACKEND_DEVELOPER = 'Back End Developer';
    public const ROLE_FULLSTACK_DEVELOPER = 'Full Stack Developer';

    public function __construct($id, $name, $age, $developerRole) {
      parent::__construct($id, $name, $age);
      $this->developerRole = $developerRole;
    }

    public function introduce() {
      parent::introduce();
      echo "I am working as a {$this->developerRole}";
    }
  }

  $developer = new Developer(1, 'Sourav Malo', 23, Developer::ROLE_FRONTEND_DEVELOPER);
  $developer->introduce();
?>