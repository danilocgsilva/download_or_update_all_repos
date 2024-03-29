<?php

function processSuccess($results) {
	print("go\n");
	$obs = json_decode($results);

	foreach ($obs as $proj) {
		print($proj->name . "\n");
	}
}

include('listrepos.confs.php');

header('Content-type: text/plain; charset=utf-8');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/user/repos?per_page=10000');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $authorizationstring);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

$results = curl_exec($ch);
$dataResponse = curl_getinfo($ch);
$responseCode = $dataResponse["http_code"];
curl_close($ch);

if ($responseCode !== 200) {
	print("error");
	exit();
}

processSuccess($results);
