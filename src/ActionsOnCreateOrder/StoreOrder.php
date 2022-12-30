<?php

namespace App\ActionsOnCreateOrder;

use App\Contracts\ActionAfterCreateOrder;
use App\Order;

class StoreOrder implements ActionAfterCreateOrder
{
    public function executeAction(Order $order): void
    {
        echo "Store order in db" . PHP_EOL;
    }
}
