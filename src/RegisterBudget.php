<?php


namespace App;

use App\BudgetStates\Finalized;
use App\Http\Contracts\HttpAdapter;
use DomainException;

class RegisterBudget
{
    public function __construct(private HttpAdapter $http)
    {
    }

    public function register(Budget $budget): void
    {
        if ($budget->status instanceof Finalized) {
            throw new DomainException("Only finalized budgets can be registered");
        }

        $this->http->post('http://api.register.budget', [
            'value' => $budget->value,
            'items' => $budget->itens
        ]);
    }
}
