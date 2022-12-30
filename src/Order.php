<?php


namespace App;

use DateTimeInterface;

class Order
{
    public string $clientName;
    public DateTimeInterface $finalizedAt;
    public Budget $budget;
}
