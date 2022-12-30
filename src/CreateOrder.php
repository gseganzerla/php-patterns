<?php


namespace App;

class CreateOrder
{
    public function __construct(public float $valueBudget, public int $items, public string $clientName)
    {
    }
}
