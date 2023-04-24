<?php

namespace App\Invoice;

use App\BudgetItem;
use DateTimeImmutable;
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

    public function __clone()
    {
        $this->createdAt = new DateTimeImmutable;
    }

// public function clone() 
// {
//     $clonedInvoice = new Invoice;
//     $clonedInvoice->nrl = $this->nrl;
//     $clonedInvoice->bussinesName = $this->bussinesName;
//     $clonedInvoice->items = $this->items;
//     $clonedInvoice->observations = $this->observations;
//     $clonedInvoice->createdAt = $this->createdAt;
//     $clonedInvoice->taxesValues = $this->taxesValues;

//     return $clonedInvoice;
// }

}