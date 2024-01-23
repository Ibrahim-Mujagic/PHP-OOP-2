<?php 

class Ingredients{
  public $ingredient;
  public $second_ingredient;
  private $secret_ingredient;

  public function __construct($_ingredient,$_second_ingredient,$_secret_ingredient = '')
  {
    $this->ingredient = $_ingredient;
    $this->second_ingredient = $_second_ingredient;
    $this->setSecretIngredient($_secret_ingredient);
   
  }

  public function setSecretIngredient($_secret_ingredient){
    if (!empty($_secret_ingredient)) {
      $this->secret_ingredient = $_secret_ingredient;
    } 
  }

  public function getSecretIngredient() {
   return $this->secret_ingredient; 
  }

  public function getAllIngredients(){
    return $this->ingredient . ',' . $this->second_ingredient . ($this->getSecretIngredient() ? ',' . $this->getSecretIngredient() : '');
  }
}