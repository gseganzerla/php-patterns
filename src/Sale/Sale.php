<?php


namespace App\Sale;
use DateTimeInterface;


abstract class Sale
{
    public function __construct(public DateTimeInterface $soldAt)
    {
    }
}