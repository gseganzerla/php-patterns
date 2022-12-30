<?php

use App\CreateOrder;

require_once "vendor/autoload.php";

$value = $argv[1];
$items = $argv[2];
$clientName = $argv[3];


$createOrder = new CreateOrder(valueBudget: $value, items: $items, clientName: $clientName);
$createOrder->execute();


echo "Cria pedido no banco de dados" . PHP_EOL;
echo "Envia email para o cliente" . PHP_EOL;
