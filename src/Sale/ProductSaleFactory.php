<?php

namespace App\Sale;

use App\Taxes\Contracts\Tax;
use App\Taxes\ICMS;
use DateTimeImmutable;

class ProductSaleFactory implements SaleFactory
{

    public function __construct(public int $productWeight)
    {
    }


    public function createSale(): Sale
    {
        return new ProductSale(new DateTimeImmutable(), $this->productWeight);
    }

    public function tax(): Tax
    {
        return new ICMS();
    }
}