<?php


namespace App\Sale;

use App\Sale\Sale;
use App\Taxes\Contracts\Tax;

interface SaleFactory
{
    public function createSale(): Sale;
    public function tax(): Tax;
}