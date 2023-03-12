<?php

use App\Budget;
use App\Order;
use App\OrderExtrinsicData;

require 'vendor/autoload.php';


$orders = [];

$today = new DateTimeImmutable;

$data = new OrderExtrinsicData(md5("a"), $today);

for ($i = 0; $i < 10000; $i++) {
    $order = new Order;
    $order->budget = new Budget;
    $order->data = $data;

    $orders[] = $order;
}


echo memory_get_peak_usage() . PHP_EOL;
