<?php 

class Category{
  public $type;
  public $icon;

  public function __construct($_type)
  {
    $this->type = $_type;
  }

  public function setIcon(){
    $type_string = strtolower($this->type);

    if ($type_string === 'dog') {
      $this->icon = 'fa-solid fa-dog';
    }elseif($type_string === 'cat'){
      $this->icon = 'fa-solid fa-cat';
    }else{
      $this->icon = 'fa-solid fa-paw';
    }

    return $this->icon;
  }
}