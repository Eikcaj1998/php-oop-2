<?php
require_once __DIR__ . '/Client.php';

class RegisteredCard
{
    //variabili d'istanza
    public $email;
    //construttore
    public function __construct($name,$surname,$email)
    {
        parent::__construct($name,$surname);
        $this->email = $email;
    }

    public function getFullName($name,$surname)
    {
        return "{ $this->name} { $this->surname} {$this->email}";
    }
    
}  
