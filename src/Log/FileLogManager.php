<?php

namespace App\Log;

use App\Log\LogManager;

class FileLogManager extends LogManager
{


    public function __construct(private string $path)
    {
    }

    public function createLogWriter(): LogWritter
    {
        return new FileLogWritter($this->path);
    }
}