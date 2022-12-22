<?php


namespace App\Taxes\Contracts;

use App\Budget;

interface Tax
{
    public function calculate(Budget $budget): float;
}
