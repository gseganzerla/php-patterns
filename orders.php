<?php

use App\Budget;
use App\Order\Order;
use App\Order\OrderCreator;
use App\Order\OrderTemplate;

require 'vendor/autoload.php';


$orders = [];
$orderCreator = new OrderCreator;

$data = new OrderTemplate(md5("a"), new DateTimeImmutable);

for ($i = 0; $i < 10000; $i++) {
    $budget = new Budget;
    $order = $orderCreator->create('Guilherme', date('Y-m-d'), $budget);
}


echo memory_get_peak_usage() . PHP_EOL;
