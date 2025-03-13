<?php
$consumerKey = "mTAK6VfU67k9hpZrN48i3N2TJVSnI9wBiD1BH3Urkqhvrgm1";
$consumerSecret = "3ujTFUc7nnpr8QiLDhYyl5ZLAoif7feA5SdG6I9cuz8AGD4C6SxCXEWiAldUGanK";
$access_token_url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

$headers = ["Content-Type:application/json; charset=utf8"];

$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ":" . $consumerSecret);

$response = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($response);

echo $access_token = $result->access_token;
curl_close($curl);
