<?php


namespace App\Discounts;

use App\Budget;

class DiscountGreaterThan500BRL extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * .05;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}
