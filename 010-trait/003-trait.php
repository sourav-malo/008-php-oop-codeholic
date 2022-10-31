<?php
  require_once '001-Robot.php';
  require_once '002-Drone.php';

  class FlyingRobot {
    use RobotTrait, DroneTrait {
      DroneTrait::setMaxSpeed insteadOf RobotTrait;
      DroneTrait::getMaxSpeed insteadOf RobotTrait;
      DroneTrait::setMaxSpeed as setFlyingMaxSpeed;
      DroneTrait::getMaxSpeed as getFlyingMaxSpeed;
      RobotTrait::setMaxSpeed as setRunningMaxSpeed;
      RobotTrait::getMaxSpeed as getRunningMaxSpeed;
    }

    public function __construct($maxRunningSpeed, $maxFlyingSpeed, $maxWalkingTime, $maxFlyingTime) {
      $this->maxWalkingTime = $maxWalkingTime;
      $this->maxFlyingTime = $maxFlyingTime;
      $this->setRunningMaxSpeed($maxRunningSpeed);
      $this->setFlyingMaxSpeed($maxFlyingSpeed);
    }
  }

  $flyingRobot = new FlyingRobot(20, 10, 2000, 1000);
  echo $flyingRobot->getMaxSpeed() . PHP_EOL;
  echo $flyingRobot->getFlyingMaxSpeed() . PHP_EOL;
  echo $flyingRobot->getRunningMaxSpeed() . PHP_EOL;
?>