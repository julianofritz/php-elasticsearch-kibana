<?php

require '../vendor/autoload.php';

// Create an elastic  client
$client = Elasticsearch\ClientBuilder::create()
    ->build();

// Generate an  index
$params = [
    'index' => 'my_index',
    'id'    => 'my_id',
    'body'  => ['testField' => 'abc']
];

$response = $client->index($params);
print_r($response);