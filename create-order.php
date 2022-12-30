<?php

use App\ActionsOnCreateOrder\Log;
use App\ActionsOnCreateOrder\SendEmail;
use App\ActionsOnCreateOrder\StoreOrder;
use App\CreateOrder;
use App\HandlerCreateOrder;

require_once "vendor/autoload.php";

$value = $argv[1];
$items = $argv[2];
$clientName = $argv[3];


$createOrder = new CreateOrder(valueBudget: $value, items: $items, clientName: $clientName);

$handlerCreateOrder = new HandlerCreateOrder();
$handlerCreateOrder->addAction(new StoreOrder);
$handlerCreateOrder->addAction(new SendEmail);
$handlerCreateOrder->addAction(new Log);
$handlerCreateOrder->execute($createOrder);
