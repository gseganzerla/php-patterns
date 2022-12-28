<?php


namespace App;

use App\BudgetStates\BudgetState;
use App\BudgetStates\OnApproval;

class Budget
{
    public float $value;
    public int $itens;
    public BudgetState $status;

    public function __construct()
    {
        $this->status = new OnApproval;
    }

    public function applyDiscount()
    {
        return $this->value -= $this->status->calculateExtraDiscount($this);
    }

    public function approve(): void
    {
        $this->status->approve($this);
    }

    public function deny(): void
    {
        $this->status->deny($this);
    }

    public function finalize(): void
    {
        $this->status->finalize($this);
    }
}
