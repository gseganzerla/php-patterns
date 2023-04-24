<?php
use App\Connection;

require 'vendor/autoload.php';



$pdo = Connection::getInstance('sqlite::memory');

/** @var Connection $pdo2 */
$pdo2 = Connection::getInstance('sqlite::memory');


var_dump($pdo, $pdo2);