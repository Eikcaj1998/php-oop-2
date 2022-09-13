<?php
require_once __DIR__ . '/Product.php';
class Games extends Product
{
    public $materials;
    public $color;

    public function __construct($name, $description, $price, $animaltypes, $materials, $color)
    {
        parent::__construct($name, $description, $price , $animaltypes);
        $this->setmaterials($materials);
        $this->setcolor($color);
 
    }

 public function getmaterials()
    {
        return $this->materials;
    }

    public function setmaterials($materials)
    {
        $this->materials = $materials;
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