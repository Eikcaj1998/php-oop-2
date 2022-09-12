<?php
class Client
{
    //variabili d'istanza
    public $name;
    public $surname;
    //construttore
    public function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

}
$user = new Client('Jackie','Wang');
var_dump ($user);
var_dump ($user -> name);