<?php


namespace App\Sale;
use App\Sale\Sale;
use DateTimeInterface;


class ServiceSale extends Sale{

    public function __construct(public DateTimeInterface $soldAt, private string $serviceProviderName)
    {
        parent::__construct($soldAt);
    }
}