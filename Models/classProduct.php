<?php

class Product {
   private $category;
   private $image;
   private $title;
   private $price;
   private $icon;
   private $type;

function __construct($_category, $_image, $_title, $_price, $_icon, $_type )
{

        $this->category = $_category;
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->icon = $_icon;
        $this->type = $_type;

}

  public function getCategory{
    return $this->category;
    
  }

  public function getImage{
    return $this->image;
    
  }

  public function getTitle{
    return $this->title;
    
  }

  public function getPrice{
    return $this->price;
    
  }

  public function getIcon{
    return $this->icon;
    
  }

  public function getType{
    return $this->type;
    
  }
}








?>