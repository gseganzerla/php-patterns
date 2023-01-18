<?php
use App\Budget;
use App\Http\CurlAdapter;
use App\Http\ReactPHPHttpAdapter;
use App\RegisterBudget;

require 'vendor/autoload.php';


$registerBudget = new RegisterBudget(new ReactPHPHttpAdapter);
$registerBudget->register(new Budget);