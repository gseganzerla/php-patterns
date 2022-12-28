<?php

namespace App\BudgetStates;

use App\Budget;
use DomainException;

class Denied extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget)
    {
        throw new DomainException("A deined budget cannot receive a discount");
    }

    public function finalize(Budget $budget): void
    {
        $budget->status = new Finalized;
    }
}
