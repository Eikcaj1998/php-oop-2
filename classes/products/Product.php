<?php
class Product
{
    //variabili d'istanza
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $animaltypes;
    
    //construttore 
    public function __construct($name, $description, $price, $animaltypes)
    {   
        $this->setid();
        $this->setname($name);
        $this->setdescription($description);
        $this->setPrice($price);
        $this->setanimaltypes($animaltypes);

    }
    public function getid()
    {
        return $this->id;
    }

    public function setid()
    {
        $this->id = uniqid();
        return $this;
    }

    public function getanimaltypes()
    {
        return $this->animaltypes;
    }

    public function setanimaltypes($animaltypes)
    {
        $this->animaltypes = $animaltypes;
        return $this;
    }

    public function getprice()
    {
        return $this->price;
    }

    public function setprice($price)
    {
        $this->price = $price;
        return $this;
    }
    public function getdescription()
    {
        return $this->description;
    }

    public function setdescription($description)
    {
        $this->description = $description;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}