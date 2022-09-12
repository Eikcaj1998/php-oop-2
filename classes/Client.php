<?php
class Client
{
    //variabili d'istanza
    public $name;
    public $surname;
    public $credit_card;
    //construttore
    public function __construct($name,$surname,$credit_card)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

}
$user = new Client('Jackie','Wang');
var_dump ($user);
var_dump ($user -> name);