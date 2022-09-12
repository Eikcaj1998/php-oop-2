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
 require_once __DIR__ . '/classes/Product.php';
 require_once __DIR__ . '/classes/Food.php';
 require_once __DIR__ . '/classes/Games.php';
 require_once __DIR__ . '/classes/RegisteredCard.php';
 require_once __DIR__ . '/classes/Client.php';
 
 $item1 = new Product('star', 50, 'parola1');

$item2 = new Product('moon', 30, 'description');

$items = [$item1,$item2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($items as $item):?>
            <li>
                <h2><?= $item->brand ?></h2>
                <strong><?= $item->getPrice() ?></strong>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>