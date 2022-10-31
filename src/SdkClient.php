<?php

namespace MIT\SdkClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;


 class SdkClient {

    public function __construct()
    {}

    public function postRequest() {
        $stack = HandlerStack::create(new CurlHandler());
        $client = new Client(['handler' => $stack]);
        // $headers = [
        //     'Content' => 'text/plain; charset=ISO-8859-1'
        // ];

        $responsePGS = $client->request('POST', 'https://sandboxpo.mit.com.mx/gen', [
            'form_params' => [
                'xml' => 'abcde'
            ]
        ]);
        var_dump( $responsePGS->getBody()->getContents());
        return $responsePGS;
    }

}
