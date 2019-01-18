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
  redirection200ok();
}else {
  redirectionErreur400();
}
function redirectionErreur404()
  {
    header('HTTP/1.0 400');
    exit;
  }
  function redirection200ok()
    {
      header('HTTP/1.0 200 Ok');
      exit;
    }
