<?php

namespace MIT\SdkClient\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;

class HttpHelper {

    private $endpoint;
    private $client;

    public function __construct($endpoint)
    {
        $this->endpoint = $endpoint;
        $stack = HandlerStack::create(new CurlHandler());
        $this->client = new Client(['handler' => $stack]);
    }

    public function post($message) {
        $responsePGS = $this->client->request('POST', $this->endpoint, [
            'form_params' => [
                'xml' => $message
            ]
        ]);
        $responsePGS = $responsePGS->getBody()->getContents();
        return $responsePGS;
    }

}