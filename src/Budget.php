<?php


namespace App;

use App\BudgetStates\BudgetState;
use App\BudgetStates\OnApproval;
use App\Contracts\Budgetable;

class Budget implements Budgetable
{
    private array $items;
    public BudgetState $status;


    public function __construct()
    {
        $this->status = new OnApproval;
        $this->items = [];
    }

    // public function applyDiscount()
    // {
    //     return $this->value -= $this->status->calculateExtraDiscount($this);
    // }

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

    public function add(Budgetable $item): void
    {
        $this->items[] = $item;
    }

    public function value(): float
    {
        return array_reduce($this->items, fn (float $amount, Budgetable $item) => $item->value() + $amount, 0);
    }
}
