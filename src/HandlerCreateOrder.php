<?php

namespace App;

use App\ActionsOnCreateOrder\Log;
use App\ActionsOnCreateOrder\SendEmail;
use App\ActionsOnCreateOrder\StoreOrder;
use App\Contracts\ActionAfterCreateOrder;
use DateTimeImmutable;


class HandlerCreateOrder
{

    private array $actions = [];

    public function addAction(ActionAfterCreateOrder $action): void
    {
        $this->actions[] = $action;
    }

    public function execute(CreateOrder $createOrder)
    {
        $budget = new Budget;
        $budget->itens = $createOrder->items;
        $budget->value = $createOrder->valueBudget;

        $order = new Order;
        $order->finalizedAt = new DateTimeImmutable();
        $order->clientName = $createOrder->clientName;
        $order->budget = $budget;


        foreach ($this->actions as $action) {
            $action->executeAction($order);
        }
    }
}
