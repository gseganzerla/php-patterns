<?php


namespace App\Taxes;

use App\Budget;
use App\Taxes\Contracts\Tax;

class ISS extends Tax
{
    public function specificCalculation(Budget $budget): float
    {
        return $budget->value * .06;
    }
}
