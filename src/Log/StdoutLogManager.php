<?php

namespace App\Log;

use App\Log\LogManager;

class StdoutLogManager extends LogManager
{
    public function createLogWriter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}