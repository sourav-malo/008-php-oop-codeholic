<?php
  trait RobotTrait {
    private $maxRunningSpeed;
    private $maxWalkingTime;

    public function __construct($maxSpeed, $maxWalkingTime) {
      $this->maxRunningSpeed = $maxSpeed;
      $this->maxWalkingTime = $maxWalkingTime;
    }

    public function getMaxSpeed() {
      return $this->maxRunningSpeed;
    }

    public function setMaxSpeed($maxRunningSpeed) {
      $this->maxRunningSpeed = $maxRunningSpeed;
    }

    public function getMaxWalkingTime() {
      return $this->maxWalkingTime;
    }

    public function setMaxWalkingTime($maxWalkingTime) {
      $this->maxWalkingTime = $maxWalkingTime;
    }
  }

  class Robot {
    use RobotTrait;
  }
?>