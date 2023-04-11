<?php


namespace App\Sale;

use App\Sale\Sale;
use DateTimeInterface;


class ProductSale extends Sale
{

    public function __construct(public DateTimeInterface $soldAt, private int $productWeight)
    {
        parent::__construct($soldAt);
    }
}