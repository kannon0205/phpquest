<?php

class Wepon{
  private $name;
  private $ad;
  
  public function __construct($name,$ad) {
    $this->name = $name;
    $this->ad = $ad;
  }
  
  public function getName() {
  return $this->name;
  }
  
  public function getAd() {
  return $this->ad;
  }
}

?>
