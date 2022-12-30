<?php


namespace App;

use App\Contracts\Command;
use DateTimeImmutable;

class CreateOrder implements Command
{
    public function __construct(private float $valueBudget, private int $items, private string $clientName)
    {
    }


    public function execute(): void
    {
        $budget = new Budget;
        $budget->itens = $this->items;
        $budget->value = $this->value;

        $order = new Order;
        $order->finalizedAt = new DateTimeImmutable();
        $order->clientName = $this->clientName;
        $order->budget = $budget;
    }
}
