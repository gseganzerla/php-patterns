<?php

namespace App;

use App\Taxes\Contracts\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->calculate($budget);
    }
}
