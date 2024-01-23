<?php 

class Sit extends Product{
  public $size;
  public $material;

  public function __construct($_name,$_brand,Category $_category,$_price,$_quantity,$_size,$_material)
  {
    parent::__construct($_name,$_brand, $_category,$_price,$_quantity);  
    
    $this->size = $_size;
    $this->material = $_material;
    
  }
}