<?php


namespace App\Http;
use App\Http\Contracts\HttpAdapter;


class CurlAdapter implements HttpAdapter
{
    public function post(string $url, array $data): void 
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, $data);

        curl_exec($curl);
    }
}