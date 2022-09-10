<?php
$client = new Client();

$headers = [
  'Authorization' => 'mh6jMI72MnhTvrbSYAoi0CN13DKQqEM8',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "bustarde.audriel@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io//api/rest/issues/api/rest/issues/1234/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
