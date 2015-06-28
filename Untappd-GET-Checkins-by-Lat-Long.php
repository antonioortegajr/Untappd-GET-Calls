<?php

//You will need an API key and secret from Untapped
//simple call to get untappd check ins from the area specified by lat and log

$gate = 'http://api.untappd.com/v4/thepub/local?limit=25';

$lat = 'YourLat';

$lng = 'YourLong';


$client_id = 'YourID';

$client_secret = 'YourSecret';



$ch = curl_init($gate . '&lat=' . $lat . '&lng=' . $lng . '&client_id=' . $client_id . '&client_secret=' . $client_secret);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


$data = curl_exec($ch);

curl_close($ch);


// dump out the data returned
var_dump($data);
?>
