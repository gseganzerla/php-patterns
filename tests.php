<?php

use App\Budget;
use App\TaxCalculator;
use App\Taxes\ICMS;

require 'vendor/autoload.php';


$calculator = new TaxCalculator;

$budget = new Budget;
$budget->value = 100;

echo $calculator->calculate($budget, new ICMS) . "\n";