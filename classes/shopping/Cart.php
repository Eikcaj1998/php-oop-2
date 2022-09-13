<?php

require_once __DIR__ . '/../products/Product.php';
class cart
{
    private $products = [];

    public function getproductslist()
        {
            return $this->products;

        }

    public function gettotal()
    {
        $total=0;
        foreach($this->products as $product)
        {
            $total+= $product->getprice();
        }
        return $total;
    }

    public function addproduct($product)
    {
        if (!($product instanceof Product)) throw new Exception("$product must be instance of Product");
        $this->products[]=$product;
    }

    public function removeproduct($product)
    {
        if($product instanceof Product)
        {
            $id = $product->getid();
            foreach($this->products as $key => $value);
            {
                if($value->getid() === $id) unset($this->products[$key]);
            }
        } else 
            {
                throw new Exception("$product must be instance of Product");
            }
    }
}