<?php

class Enemy {
  private $name;
  private $hp;
  private $atk;
  private $def;
  private $exp;
  
  public function __construct($name, $hp, $atk, $def, $exp) {
    $this->name = $name;
    $this->hp = $hp;
    $this->atk = $atk;
    $this->def = $def;
    $this->exp = $exp;
  }
  public function getName() {
    return $this->name;
  }
    
  public function getHp() {
    return $this->hp;
  }
  
  public function getAtk() {
    return $this->atk;
  }
    
  public function getDef() {
    return $this->def;
  }
  
  public function getExp() {
    return $this->exp;
  }
  
}

?>
