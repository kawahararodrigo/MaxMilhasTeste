<?php

namespace App\Services;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Message\Response;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client;

class GuzzleService
{
    private $guzzleHttpClient;
    private const HTTP_VERB = 'GET';
    private const URL_API   = 'https://viacep.com.br/ws/';


    public function __construct(Client $guzzleHttpclient)
    {
        $this->guzzleHttpclient = $guzzleHttpclient;
    }

    public function makeRequestApiCorreios(string $cep)
    {
        $header = [
            'Content-Type'  => 'application/json'
        ];

        $response = $this->guzzleHttpclient->request(self::HTTP_VERB, self::URL_API . $cep . '/json', ['header' => $header]);
        
        return json_decode($response->getBody()->getContents());
    }
}
