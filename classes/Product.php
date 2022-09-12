<?php
class Product
{
    //variabili d'istanza
    public $brand;
    public $price;
    public $description;
    //construttore 
    public function __construct($brand, $price, $description)
    {
        $this->brand = $brand;
        $this->setPrice($price);
        $this->description = $description;
    }
    //Metodi
    public function getDiscountedPrice($perc)
    {
        $discount = $this -> price - ( $this -> price * ($perc / 100 ));
        return number_format($discount, 2);
    }
    //getters
    public function getTitle()
    {
        return $this->title;
    }
    public function getPrice( $currency = '€')
    {   
        if($this->price) return $currency . $this->price;
        return 'n.d';
    }
    //setters
    public function setPrice($price)
    {   
        if(!is_numeric($price) || $price < 0) return;
        $this->price = $price;
    }
}


