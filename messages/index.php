  <?php
  use GuzzleHttp\Client;

  $client = new Client([
      'base_uri' => 'http://82.165.98.24/back/messages',
      'timeout'  => 2.0,
  ]);
