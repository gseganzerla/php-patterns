<?php

namespace App;

use App\Discounts\DiscountGreaterThan5Itens;
use App\Discounts\DiscountGreaterThan500BRL;
use App\Discounts\NoDiscount;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {

        $chainOfDiscounts = new DiscountGreaterThan5Itens(new DiscountGreaterThan500BRL(new NoDiscount()));

        return $chainOfDiscounts->calculateDiscount($budget);
    }
}
