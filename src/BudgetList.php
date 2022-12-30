<?php


namespace App;

use App\BudgetStates\Finalized;
use ArrayIterator;
use IteratorAggregate;
use Traversable;

class BudgetList implements IteratorAggregate
{
    private array $budgets = [];

    public function attach(Budget $budget): void
    {
        $this->budgets[] = $budget;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->budgets);
    }

    public function finalizeds(): array 
    {
        return array_filter($this->budgets, fn (Budget $budget) => $budget->status instanceof Finalized);
    }
}
