<?php


namespace App\Http\Contracts;


interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}
