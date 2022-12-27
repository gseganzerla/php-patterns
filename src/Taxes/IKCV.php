<?php


namespace App\Taxes;

use App\Budget;

class IKCV extends TaxWith2Rates
{
    protected function mustApplyMaxiumTax(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->itens > 3;
    }

    protected function calculateMaximumTax(Budget $budget): float
    {
        return $budget->value * .04;
    }

    protected function calculateMinimumTax(Budget $budget): float
    {
        return $budget->value * .025;
    }
}
