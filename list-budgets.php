<?php


require_once "vendor/autoload.php";


use App\Budget;
use App\BudgetList;

$budget1 = new Budget;
$budget1->itens = 7;
$budget1->value = 1500;
$budget1->approve();


$budget2 = new Budget;
$budget2->itens = 3;
$budget2->value = 150;
$budget2->deny();

$budget3 = new Budget;
$budget3->itens = 5;
$budget3->value = 1350;
$budget3->approve();
$budget3->finalize();


$budgets =  new BudgetList;
$budgets->attach($budget1);
$budgets->attach($budget2);
$budgets->attach($budget3);


foreach ($budgets as $budget) {
    echo "Valor: {$budget->value} \n";
    echo "Estado: " . get_class($budget->status) . "\n";
    echo "Itens: {$budget->itens} \n";

    echo PHP_EOL;
}
