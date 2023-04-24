<?php

namespace App\Invoice;

use App\BudgetItem;
use DateTimeInterface;

class Invoice
{
    public string $nrl;
    public string $bussinesName;
    public array $items;
    public string $observations;
    public DateTimeInterface $createdAt;
    public float $taxesValues;




    public function value(): float
    {

        return array_reduce(
            $this->items,
            fn(float $amount, BudgetItem $item) =>
            $amount + $item->value(),
            0
        );
    }

}