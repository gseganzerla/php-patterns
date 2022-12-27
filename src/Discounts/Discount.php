<?php

namespace App\Discounts;

use App\Budget;

abstract class Discount
{
    public function __construct(protected ?Discount $nextDiscount)
    {
    }

    abstract public function calculateDiscount(Budget $budget): float;
}
