<?php
use App\Log\FileLogManager;
use App\Log\StdoutLogManager;

require "vendor/autoload.php";


$logManager = new FileLogManager('app.log');


$logManager->log('info', 'Hello World');