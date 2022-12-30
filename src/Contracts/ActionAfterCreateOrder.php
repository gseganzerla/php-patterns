<?php


namespace App\Contracts;

use App\Order;

interface ActionAfterCreateOrder
{
    public function executeAction(Order $order): void;
}
