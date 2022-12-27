<?php


namespace App\Taxes;

use App\Budget;

class ICPP extends TaxWith2Rates
{
    protected function mustApplyMaxiumTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function calculateMaximumTax(Budget $budget): float
    {
        return $budget->value * .03;
    }

    protected function calculateMinimumTax(Budget $budget): float
    {
        return $budget->value * .02;
    }
}
