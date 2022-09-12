<?php
class Client
{
    //variabili d'istanza
    public $name;
    public $surname;
    public $credit_card;
}
$user = new Client();
var_dump ($user);
$user->name = 'Jackie';
$user->surname = 'Wang';
var_dump ($user -> name);