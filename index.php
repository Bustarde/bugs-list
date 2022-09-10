<!DOCTYPE html>
<html>
<head>
<?php
include "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

define('TOKEN', 'mh6jMI72MnhTvrbSYAoi0CN13DKQqEM8');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');


$client = new Client();
$headers = [
  'Authorization' => 'mh6jMI72MnhTvrbSYAoi0CN13DKQqEM8'
];
$request = new Request('GET', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1', $headers);
$res = $client->sendAsync($request)->wait();
$bugs = $res->getBody()->getContents();
$bugs_list = json_decode($bugs);


?>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>IPT10 Bugs List</h2>
<h3>AUDRIEL V. BUSTARDE</h3>

<table>
  <tr>
    <li>ID</li>
    <li>Summary</li>
    <li>Severity</li>
    <li>Status</li>
  </tr>
  <?php foreach ($bugs_list->issues as $bug)
{
	echo '<tr>' . '<li>'. $bug->id . '</li>' .
  '<li>'. $bug->summary . '</li>' . 
  '<li>'. $bug->severity->name .'</li>' .
  '<li>'. $bug->status->name . '</li>' . '<tr>';
}
?>

    
</table>

</body>
</html>

