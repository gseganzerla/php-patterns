<?php

namespace App\Log;

abstract class LogManager
{
    public function log(string $severity, string $message): void
    {
        $logWritter = $this->createLogWriter();

        $today = date('Y-m-d H:i:s');
        $formatedMessage = "[$today][$severity] $message" . PHP_EOL;

        $logWritter->write($formatedMessage);

    }

    // LogWritter Factory
    abstract public function createLogWriter(): LogWritter;
}