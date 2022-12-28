<?php

namespace App\BudgetStates;

use App\Budget;
use DomainException;

abstract class BudgetState
{
    abstract public function calculateExtraDiscount(Budget $budget);

    public function approve(Budget $budget): void
    {
        throw new DomainException("This budget cannot be approved");
    }

    public function deny(Budget $budget): void
    {
        throw new DomainException('This budget cannot be denied');
    }

    public function finalize(Budget $budget): void
    {
        throw new DomainException('This budget cannot be finalized');
    }
}
