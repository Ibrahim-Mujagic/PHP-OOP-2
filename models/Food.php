<?php 

class Food extends Product{
  public $weight;
  public $ingredients;
  public $taste;

  public function __construct($_name,$_brand,Category $_category,$_price,$_quantity,$_weight,Ingredients $_ingredients,$_taste) {
    
    parent::__construct($_name,$_brand, $_category,$_price,$_quantity);  
    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->taste = $_taste;
  }

}