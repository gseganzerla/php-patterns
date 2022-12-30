<?php

namespace App\ActionsOnCreateOrder;

use App\Contracts\ActionAfterCreateOrder;
use App\Order;

class SendEmail implements ActionAfterCreateOrder
{
    public function executeAction(Order $order): void
    {
        echo "Enviar email do pedido que foi gerado" . PHP_EOL;
    }
}
