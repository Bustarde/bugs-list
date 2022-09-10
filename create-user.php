<?php
$client = new Client();

$headers = [
  'Authorization' => 'mh6jMI72MnhTvrbSYAoi0CN13DKQqEM8',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "audrielbustarde",
  "password": "pass123",
  "real_name": "Audriel V. Bustarde",
  "email": "bustarde.audriel@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io//api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
