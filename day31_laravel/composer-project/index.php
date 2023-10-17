<?php

require_once 'vendor/autoload.php';

$client = new GuzzleHttp\Client();

$res = $client->request('GET', 'https://www.metacritic.com/movie/the-shawshank-redemption', [
    'verify' => false // don't bother verifying SSL certificates
]);

echo $res->getBody();