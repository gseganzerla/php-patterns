<?php

namespace App\Report;

use App\Order;
use App\Report\Contracts\ExportedContent;

class ExportedOrder implements ExportedContent
{
    public function __construct(private Order $order)
    {
    }

    public function content(): array
    {
        return [
            'finalized_at' => $this->order->finalizedAt->format('d/m/y'),
            'client_name' => $this->order->clientName
        ];
    }
}
