<?php

use App\{Budget, Order};
use App\Report\{ExportedBudget, ExportedFileXml, ExportedFileZip, ExportedOrder};

require 'vendor/autoload.php';



$budget = new Budget;

$budget->value = 500;
$budget->itens = 7;


$exportedBudget = new ExportedBudget($budget);
$exportedBudget->content();


var_dump($exportedBudget);