<?php
  require_once '001-ns1.php';

  use \ns1\{User, Article, Comment};
  use \ns1\MyAwesomeReactFeatureImplementedForMyPortfolioProject as MyAwesomeReactClass;
  use function \ns1\strlen;
  use const \ns1\ROOT;

  new User();
  new Article();
  new Comment();
  new MyAwesomeReactClass();
  strlen();
  echo \strlen('hello') . PHP_EOL;
  echo ROOT . PHP_EOL;
?>