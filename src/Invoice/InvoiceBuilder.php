<?php


namespace App\Invoice;

use App\BudgetItem;
use App\Invoice\Invoice;
use DateTimeImmutable;

abstract class InvoiceBuilder
{

    public Invoice $invoice;

    public function __construct()
    {
        $this->invoice = new Invoice;
        $this->invoice->createdAt = new DateTimeImmutable();
    }

    public function forCompany(string $nrl, string $bussinesName): self
    {
        $this->invoice->nrl = $nrl;
        $this->invoice->bussinesName = $bussinesName;

        return $this;
    }

    public function withItem(BudgetItem $item): self
    {
        $this->invoice->items[] = $item;

        return $this;
    }

    public function withObservation(string $observations): self
    {
        $this->invoice->observations = $observations;

        return $this;
    }

    public function withCreatedAt(DateTimeImmutable $createdAt): self
    {
        $this->invoice->createdAt = $createdAt;

        return $this;
    }

    abstract public function build(): Invoice;
}