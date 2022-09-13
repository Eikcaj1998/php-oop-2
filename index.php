<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare 
(es. da maggio ad agosto).
 -->
<?php
 include_once __DIR__ . '/classes/products/Food.php';
 include_once __DIR__ . '/classes/customer/Client.php';
 include_once __DIR__ . '/classes/customer/Registered.php';
 include_once __DIR__ . '/classes/shipping/Address.php';
 include_once __DIR__ . '/classes/shopping/CreditCard.php';


$prodotto = new Food('Scatoletta','cibo per gatti' , 3.50, '2kg' , ['cane'], ['carne','additivi','carote'],"13/09/2024");

$cliente = new Client();
$cliente->addtocart($prodotto);

$indirizzo = new Address('Jackie Wang', 'Via Rossi', '42123', 'Redbird', "Italy");


$carta = new CreditCard('1318646464','visa','13-09-2024');

$registered_user = new Registered('jackiewang','ja22@gmail.com',$indirizzo,$carta);

$registered_user->addtocart($prodotto);
$registered_user->placeorder();
