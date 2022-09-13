<?php
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/../shipping/Address.php';
require_once __DIR__ . '/../products/Product.php';

class Order
{
    private $address;
    private $credit_card;
    private $products;
    private $amount;
    private $status;

    public function __construct($address,$credit_card,$products,$amount)
    {
        $this->setaddress($address);
        $this->setcredit_card($credit_card);
        $this->setproducts($products);
        $this->setamount($amount);
        $this->setstatus();

    }

    public function getaddress() 
    {

        return $this->address;
    }

    public function setaddress($address)
    {   
        if(!($address instanceof Address)) throw new Exception('$address must be istance of Address');
        $this->address = $address;
    }

    public function getcredit_card() 
    {
        return $this->credit_card;
    }

    public function setcredit_card($credit_card)
    {   
        if(!($credit_card instanceof CreditCard)) throw new Exception('$credit_card must be istance of CreditCard');
        $this->credit_card = $credit_card;
    }

    public function getproducts() 
    {
        return $this->products;
    }

    public function setproducts($products)
    {
        array_filter($products, function($product){
          if(!($product instanceof Product))throw new Exception('$amount must be positive float');
        });
            $this->products = $products;
    }

    public function getamount() 
    {   
        return $this->amount;
    }

    public function setamount($amount)
    {
        if(!is_numeric($amount)|| $amount <=0) throw new Exception('$amount must be positive float');
        $this->amount = number_format($amount, 2);
        return $this;
    }

    public function getstatus() 
    {
        return $this->status;
    }

    public function setstatus($status='pending')
    {
        $this->status = $status;
        return $this;
    }

    //Todo
    public function performpayment()
    {   
        if($this->credit_card->isexpired())throw new Exception('la carta di credito e scaduta');
        else{
            echo "<h3>Riepilogo dell'ordine</h3></hr>";
        }
        var_dump($this);
    }

}