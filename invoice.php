<?php
use App\BudgetItem;
use App\Invoice\ProductInvoiceBuilder;

require 'vendor/autoload.php';

$item = new BudgetItem;
$item->value = 500;


$invoice = (new ProductInvoiceBuilder)
    ->forCompany('123456', 'Seganzerla Desenvolvimentos')
    ->withItem($item)
    ->withItem($item)
    ->withItem($item)
    ->withObservation('Construida com builder')
    ->build();


// var_dump($invoice);
// exit;
echo json_encode($invoice);