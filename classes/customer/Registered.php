<?php
require_once __DIR__ . '/Client.php';
require_once __DIR__ . '/../shopping/Order.php';
require_once __DIR__ . '/../shopping/CreditCard.php';
require_once __DIR__ . '/../shipping/Address.php';

class Registered extends Client
{
    private $username;
    private $email;
    private $address;
    private $credit_card;
    
    public function __construct($username, $email, $address, $credit_card)
    {   
        $this->setcart();
        $this->setusername($username);
        $this->setemail($email);
        $this->setaddress($address);
        $this->setcredit_card($credit_card);
    }
    
public function getusername()
{
    return $this->username;
}

public function setusername($username)
{
    $this->username = $username;
    return $this;
}

public function getemail()
{
    return $this->email;
}

public function setemail($email)
{
    $this->email = $email;
    return $this;
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
public function placeorder($address = null, $credit_card = null)
{
    if (!$address) $address = $this->address;
    if (! $credit_card) $credit_card = $this->credit_card;
    $amount = $this->cart->gettotal() * 0.8; //sconto del 20%
    $products = $this->cart->getproductslist();
    $order = new Order($address,$credit_card,$amount,$products);
    try{
        $order->performpayment();
    } catch(Exception $e) {
        echo '<h2> qualcosa e andato storto: ' . $e->getmessage() . '</h2>';
    }
}
}