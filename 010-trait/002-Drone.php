<?php
  trait DroneTrait {
    private $maxFlyingSpeed;
    private $maxFlyingTime;

    public function __construct($maxSpeed, $maxFlyingTime) {
      $this->maxFlyingSpeed = $maxSpeed;
      $this->maxFlyingTime = $maxFlyingTime;
    }

    public function getMaxSpeed() {
      return $this->maxFlyingSpeed;
    }

    public function setMaxSpeed($maxFlyingSpeed) {
      $this->maxFlyingSpeed = $maxFlyingSpeed;
    }

    public function getMaxFlyingTime() {
      return $this->maxFlyingTime;
    }

    public function setMaxFlyingTime($maxFlyingTime) {
      $this->maxFlyingTime = $maxFlyingTime;
    }    
  }

  class Drone {
    private $cameraResolution;

    public function __construct($maxSpeed, $maxFlyingTime, $cameraResolution) {
      $this->maxFlyingSpeed = $maxSpeed;
      $this->maxFlyingTime = $maxFlyingTime;
      $this->cameraResolution = $cameraResolution;
    }

    public function getCameraResolution() {
      return $this->cameraResolution;
    }

    public function setCameraResolution($cameraResolution) {
      $this->cameraResolution = $cameraResolution;
    }
  }
?>