<?php
$api_url = 'https://notify-api.line.me/api/notify';
$token = "";
$message = $_POST["notify_message"];

$headers = [
    'Authorization: Bearer ' . $token,
];

$fields = [
    "message" => $message,
    "imageThumbnail" => "https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg",
    "imageFullsize"=> "https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg",
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$res = curl_exec($ch);
curl_close($ch);

print_r($res);