<?php


namespace App\Invoice;


class ProductInvoiceBuilder extends InvoiceBuilder
{
    public function build(): Invoice
    {
        $invoiceValue = $this->invoice->value();

        $this->invoice->taxesValues = $invoiceValue * .02;

        return $this->invoice;
    }
}