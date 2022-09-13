<?php
require_once __DIR__ . '/Product.php';
class Food extends Product
{
   private $ingredients;
   private $expire;
   public function __construct($name, $description, $price, $animaltypes, $ingredients, $expire)
   {
        parent::__construct($name, $description, $price , $animaltypes);
        $this->setingredients($ingredients);
        $this->setexpire($expire);

   }

   public function getingredients()
    {
        return $this->ingredients;
    }

    public function setingredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    public function getexpire()
    {
        return $this->expire;
    }

    public function setexpire($expire)
    {
        $this->expire = $expire;
        return $this;
    }

}