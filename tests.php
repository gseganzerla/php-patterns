#!/usr/local/bin/php
<?php

use App\Budget;
use App\BudgetStates\Approved;
use App\BudgetStates\Denied;
use App\BudgetStates\Finalized;
use App\DiscountCalculator;

require 'vendor/autoload.php';


// $calculator = new TaxCalculator;

$budget = new Budget;
$budget->value = 100;
$budget->itens = 100;

// echo $calculator->calculate($budget, new ICMS) . "\n";


// $calculator = new DiscountCalculator;
// $budget = new Budget;

// $budget->value = 600;
// $budget->itens = 6;

$budget->approve();

// echo $calculator->calculateDiscount($budget) . PHP_EOL;
// echo $budget->applyDiscount() . PHP_EOL;

// var_dump($budget);
