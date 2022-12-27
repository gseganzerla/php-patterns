<?php


namespace App\Taxes;

use App\Budget;
use App\Taxes\Contracts\Tax;

abstract class TaxWith2Rates implements Tax
{
    public function calculate(Budget $budget): float
    {
        if ($this->mustApplyMaxiumTax($budget)) {
            return $this->calculateMaximumTax($budget);
        }

        return $this->calculateMinimumTax($budget);
    }

    abstract protected function mustApplyMaxiumTax(Budget $budget): bool;
    abstract protected function calculateMaximumTax(Budget $budget): float;
    abstract protected function calculateMinimumTax(Budget $budget): float;
}
