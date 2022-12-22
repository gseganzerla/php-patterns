<?php


namespace App\Taxes;

use App\Budget;
use App\Taxes\Contracts\Tax;

class ISS implements Tax
{
    public function calculate(Budget $budget): float
    {
        return $budget->value * .06;
    }
}
