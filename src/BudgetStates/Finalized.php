<?php

namespace App\BudgetStates;

use App\Budget;
use DomainException;

class Finalized extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget)
    {
        throw new DomainException("A finalized budget cannot receive a discount");
    }
}
