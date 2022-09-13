<?php
class CreditCard
{
    private $number;
    private $circuit;
    private $expiration;

    public function __contruct($number,$circuit, $expiration)
    {
        $this->setnumber($number);
        $this->setcircuit($circuit);
        $this->setexpiration($expiration);
    }
    
    public function isexpired()
    {
        $today = strtotime(date("d-m-Y"));
        return $this->expiration < $today;
    }

    public function getexpiration()
    {
        return date("d-m-Y",$this->expiration);
    }
    
    public function setexpiration($expiration)
    {
        $this->expiration = strtotime($expiration);
        return $this;
    }

    public function getnumber()
    {
        return $this->number;
    }
    
    public function setnumber($number)
    {
        $this->number = $number;
        return $this;
    }
    
    public function getcircuit()
    {
        return $this->circuit;
    }
    
    public function setcircuit($circuit)
    {
        $this->circuit = $circuit;
        return $this;
    }
    

}
