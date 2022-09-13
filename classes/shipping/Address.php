<?php
class Address
{
    private $fullname;
    private $street;
    private $zipcode;
    private $city;
    private $country;

    public function __contruct($fullname, $street, $zipcode, $city, $country)
    {
        $this->setfullname($fullname);
        $this->setstreet($street);
        $this->setzipcode($zipcode);
        $this->setcity($city);
        $this->setcountry($country);
    }

    public function getfullname() 
    {
        return $this->fullname;
    }

    public function setfullname($fullname)
    {
        $this->fullname = $fullname;
        return $this;
    }

    public function getstreet()
    {
        return $this->street;
    }

    public function setstreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function getzipcode()
    {
        return $this->zipcode;
    }

    public function setzipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    public function getcity()
    {
        return $this->city;
    }

    public function setcity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function getcountry()
    {
        return $this->country;
    }

    public function setcountry($country)
    {
        $this->country = $country;
        return $this;
    }
}