<?php

namespace App\BudgetStates;

use App\Budget;

class Approved extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * .02;
    }

    public function finalize(Budget $budget): void
    {
        $budget->status = new Finalized;
    }
}
