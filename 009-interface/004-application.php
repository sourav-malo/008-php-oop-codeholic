<?php
  include_once '001-interface.php';
  include_once '002-mysqldb.php';
  include_once '003-mongodb.php';

  class Application {
    public $db;

    public function __construct($db) {
      $this->db = $db;
    }
  }

  $application = new Application(new MySQLDB());
  $application2 = new Application(new MongoDB());

  $application->db->getOrders();
  $application2->db->getOrders();
  $application->db->getOrderById();
  $application2->db->getOrderById();
  $application->db->createOrder();
  $application2->db->createOrder();
  $application->db->updateOrder();
  $application2->db->updateOrder();
  $application->db->deleteOrder();
  $application2->db->deleteOrder();
?>