<?php
$client_id = "";
$api_url = "https://notify-bot.line.me/oauth/authorize?";
$callback_url = "http://localhost/linenotify/callback.php";

$param = [
    "response_type" => "code",
    "client_id" => $client_id,
    "redirect_uri" => $callback_url,
    "scope" => "notify",
    "state" => "mypsutrangalert",
];

$result = $api_url . http_build_query($param);
header("Location:" . $result);