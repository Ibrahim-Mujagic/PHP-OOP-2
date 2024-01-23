<?php 

class Product{
  public $name;
  public $brand;
  public $category;
  public $price;
  public $image;
  public $quantity;

  public function __construct($_name,$_brand,Category $_category,$_price,$_quantity)
  {
    $this->name = $_name;
    $this->brand = $_brand;
    $this->category = $_category;
    $this->price = $_price;
    $this->quantity = $_quantity;
  }

  public function getImage($_image){
    $this->image = $_image;
  }
}