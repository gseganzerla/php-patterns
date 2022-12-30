<?php

namespace App\ActionsOnCreateOrder;

use App\Contracts\ActionAfterCreateOrder;
use App\Order;

class Log implements ActionAfterCreateOrder
{
    public function executeAction(Order $order): void
    {
        echo "Gerando log do pedido" . PHP_EOL;
    }
}
