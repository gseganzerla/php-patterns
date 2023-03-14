<?php


namespace App\Log;


interface LogWritter
{
    public function write(string $formatedMessage): void;
}
