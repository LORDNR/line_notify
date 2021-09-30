<?php
$client_id = "";
$client_secret = "";
$api_url = "https://notify-bot.line.me/oauth/token";
$callback_url = "http://localhost/linenotify/callback.php";

parse_str($_SERVER['QUERY_STRING'], $queries);

$fields = [
    'grant_type' => 'authorization_code',
    'code' => $queries['code'],
    'redirect_uri' => $callback_url,
    'client_id' => $client_id,
    'client_secret' => $client_secret,
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$res = curl_exec($ch);
curl_close($ch);

print_r($res);