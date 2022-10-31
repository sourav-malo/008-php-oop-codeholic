<?php
  class MySQLDB implements DatabaseInterface {
    public function getOrders() {
      echo "Calling from " . __METHOD__ . PHP_EOL;
    }

    public function getOrderById() {
      echo "Calling from " . __METHOD__ . PHP_EOL;
    }

    public function createOrder() {
      echo "Calling from " . __METHOD__ . PHP_EOL;
    }

    public function updateOrder() {
      echo "Calling from " . __METHOD__ . PHP_EOL;
    }

    public function deleteOrder() {
      echo "Calling from " . __METHOD__ . PHP_EOL;
    }
  }
?>