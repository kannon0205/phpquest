<?php

class Armor{
  private $name;
  private $ar;
  
  public function __construct($name,$ar) {
    $this->name = $name;
    $this->ar = $ar;
  }
  
  public function getName() {
  return $this->name;
  }
  
  public function getAr() {
  return $this->ar;
  }
}

?>
