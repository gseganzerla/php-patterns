<?php

namespace App\Sale;

use App\Taxes\Contracts\Tax;
use App\Taxes\ISS;
use DateTimeImmutable;
use App\Sale\Sale;

class ServiceSaleFactory implements SaleFactory
{

    public function __construct(public string $serviceProviderName)
    {
    }


    public function createSale(): Sale
    {
        return new ServiceSale(new DateTimeImmutable(), $this->serviceProviderName);
    }

    public function tax(): Tax
    {
        return new ISS();
    }
}