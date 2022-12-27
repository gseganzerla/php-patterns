<?php


namespace App\Discounts;

use App\Budget;

class DiscountGreaterThan5Itens extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->itens > 5) {
            return $budget->value * .1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}
