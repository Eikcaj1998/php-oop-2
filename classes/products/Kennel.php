<?php
require_once __DIR__ . '/Product.php';
class Kennel extends Product
{
    public $size;
    public $color;

    public function __construct($name, $description, $price, $animaltypes, $size, $color)
    {
        parent::__construct($name, $description, $price , $animaltypes);
        $this->setsize($size);
        $this->setcolor($color);
 
    }

 public function getsize()
    {
        return $this->size;
    }

    public function setsize($size)
    {
        $this->size = $size;
        return $this;
    }

    public function getcolor()
    {
        return $this->color;
    }

    public function setcolor($color)
    {
        $this->color = $color;
        return $this;
    }

}