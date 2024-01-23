<?php 

class Toy extends Product{
  public $size;
  public $feature;

  public function __construct($_name,$_brand,Category $_category,$_price,$_quantity,$_size,$_feature)
  {
    parent::__construct($_name,$_brand, $_category,$_price,$_quantity);  
    
    $this->size = $_size;
    $this->feature = $_feature;
  }
}