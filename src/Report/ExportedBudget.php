<?php

namespace App\Report;

use App\Budget;
use App\Report\Contracts\ExportedContent;

class ExportedBudget implements ExportedContent
{
    public function __construct(private Budget $budget)
    {
    }

    public function content(): array
    {
        return [
            'value' => $this->budget->value,
            'items' => $this->budget->itens,
            'status' => $this->budget->status
        ];
    }
}
