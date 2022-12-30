<?php

namespace App;

use DateTimeImmutable;


class HandlerCreateOrder
{
    public function execute(CreateOrder $createOrder)
    {
        $budget = new Budget;
        $budget->itens = $createOrder->items;
        $budget->value = $createOrder->value;

        $order = new Order;
        $order->finalizedAt = new DateTimeImmutable();
        $order->clientName = $createOrder->clientName;
        $order->budget = $budget;
    }
}
