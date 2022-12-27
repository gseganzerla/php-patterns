<?php

namespace App;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->itens > 5) {
            return $budget->value * .1;
        }

        if ($budget->value > 500) {
            return $budget->value * .05;
        }

        return 0;
    }
}
