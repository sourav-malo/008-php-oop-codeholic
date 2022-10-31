<?php
  namespace ns1;

  class User {
    public function __construct() {
      echo 'User class instantiated under ns1 namespace' . PHP_EOL;
    }
  }

  class Article {
    public function __construct() {
      echo 'Article class instantiated under ns1 namespace' . PHP_EOL;
    }
  }

  class Comment {
    public function __construct() {
      echo 'Comment class instantiated under ns1 namespace' . PHP_EOL;
    }
  }

  class MyAwesomeReactFeatureImplementedForMyPortfolioProject {
    public function __construct() {
      echo 'MyAwesomeReactFeatureImplementedForMyPortfolioProject class instantiated under ns1 namespace' . PHP_EOL;
    }
  }

  function strlen() {
    echo 'strlen function invoked' . PHP_EOL;
  }

  const ROOT = 'http://localhost/008-php-oop-codeholic';
?>