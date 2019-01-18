<?php
use GuzzleHttp\Client;

use GuzzleHttp\EntityBody;

$responseLivre = $client->request('POST', 'http://82.165.98.24/back/messages’,
['form_params' => [
‘uuid'                     => "f81d4fae-7dec-11d0-a765-00a0c91e6bf6",
‘msg’                 => "bonjour la terre",
‘uuid’                  => "4fe5d828-6444-11e8-8222-720007e40350",
‘msg’  => "Je suis vivant.",
]]);
