<?php
use App\Sale\ServiceSaleFactory;

require 'vendor/autoload.php';

$serviceSaleFactory = new ServiceSaleFactory('Guilherme Seganzerla');
$sale = $serviceSaleFactory->createSale();
$tax = $serviceSaleFactory->tax();

var_dump($sale, $tax);