#!/usr/local/bin/php
<?php

use App\Budget;
use App\BudgetStates\Approved;
use App\BudgetStates\Denied;
use App\BudgetStates\Finalized;
use App\DiscountCalculator;
use App\TaxCalculator;
use App\Taxes\ICMS;
use App\Taxes\ISS;

require 'vendor/autoload.php';


$calculator = new TaxCalculator;

$budget = new Budget;
$budget->value = 100;
$budget->itens = 100;

echo $calculator->calculate($budget, new ISS(new ICMS)) . PHP_EOL;


// $calculator = new DiscountCalculator;
// $budget = new Budget;

// $budget->value = 600;
// $budget->itens = 6;

// $budget->approve();

// echo $calculator->calculateDiscount($budget) . PHP_EOL;
// echo $budget->applyDiscount() . PHP_EOL;

// var_dump($budget);
