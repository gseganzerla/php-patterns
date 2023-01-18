<?php

namespace App\Http;
use App\Http\Contracts\HttpAdapter;


class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data): void 
    {
        // instancia o react php
    }
}
