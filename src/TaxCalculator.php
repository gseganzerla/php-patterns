<?php

namespace App;

class TaxCalculator
{
    public function calculate(Budget $budget, string $name): float
    {
        switch ($name) {
            case 'ICMS':
                return $budget->value * .1;

            case 'ISS':
                return $budget->value * .06;
        }
    }
}
