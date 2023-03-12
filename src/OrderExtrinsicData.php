<?php


namespace App;

use DateTimeInterface;

class OrderExtrinsicData
{

    public function __construct( private string $clientName,  private DateTimeInterface $finalizedAt) 
    {
    }

    public function clientName(): string 
    {
        return $this->clientName;
    }

    public function finalizedAt(): DateTimeInterface 
    {
        return $this->finalizedAt;
    }
}

