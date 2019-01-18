<?php
header('Content-Type: application/json');
$chaine = '"payload" : {
        "inputs" : [
            { "uuid": "f81d4fae-7dec-11d0-a765-00a0c91e6bf6", "msg" : "bonjour la terre"},
            { "uuid": "4fe5d828-6444-11e8-8222-720007e40350", "msg" : "Je suis vivant."}
        ]
    }';
$payload = "payload";
$input = "inputs";
$uuid = "uuid";
$msg = "msg";

if(isset($payload,$input,$uuid,$msg)){
  echo json_encode(array('status' => 'Ok'), JSON_NUMERIC_CHECK);
}
