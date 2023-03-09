<?php

use App\Budget;
use App\BudgetItem;

require 'vendor/autoload.php';


$budget = new Budget;

$item1 = new BudgetItem;
$item1->value = 300;

$item2 = new BudgetItem;
$item2->value = 500;


$budget->add($item1);
$budget->add($item2);

$oldBudget = new Budget;
$item3 = new BudgetItem;
$item3->value = 4;

$oldBudget->add($item3);

$budget->add($oldBudget);

 echo $budget->value() . PHP_EOL;