<?php


namespace App\Taxes\Contracts;

use App\Budget;

abstract class Tax
{
    public function __construct(private ?Tax $tax = null)
    {
    }

    abstract protected function specificCalculation(Budget $budget): float;

    public function calculate(Budget $budget): float
    {
        return $this->specificCalculation($budget) + $this->specificCalculationOfAnotherTax($budget);
    }

    public function specificCalculationOfAnotherTax(Budget $budget): float
    {
        return $this->tax === null ? 0 : $this->tax->specificCalculation($budget);
    }
}