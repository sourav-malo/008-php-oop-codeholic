<?php
  interface DatabaseInterface {
    public function getOrders();
    public function getOrderById();
    public function createOrder();
    public function updateOrder();
    public function deleteOrder();
  }
?>