<?php

namespace App\BudgetStates;

use App\Budget;

class OnApproval extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * .05;
    }

    public function approve(Budget $budget): void
    {
        $budget->status = new Approved;
    }

    public function deny(Budget $budget): void
    {
        $budget->status = new Denied;
    }
}
