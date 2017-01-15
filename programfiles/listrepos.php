<?php

include('listrepos.confs.php');

header('Content-type: text/plain; charset=utf-8');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/user/repos');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $authorizationstring);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

$results = curl_exec($ch);
curl_close($ch);

$obs = json_decode($results);

foreach ($obs as $proj) {
	echo $proj->name . "\n";	
}
