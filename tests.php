#!/usr/local/bin/php
<?php

use App\Budget;
use App\DiscountCalculator;

require 'vendor/autoload.php';


// $calculator = new TaxCalculator;

// $budget = new Budget;
// $budget->value = 100;

// echo $calculator->calculate($budget, new ICMS) . "\n";


$calculator = new DiscountCalculator;
$budget = new Budget;

$budget->value = 600;
$budget->itens = 6;

echo $calculator->calculateDiscount($budget) . PHP_EOL;
