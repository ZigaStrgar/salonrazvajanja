<?php
include_once '../core/session.php';
include_once 'isLogged.php';

$image     = $_FILES["image"]["tmp_name"];
$client_id = "64324dda0931e89";

$handle = fopen($image, "r");
$data   = fread($handle, filesize($image));

$post = [ 'image' => base64_encode($data) ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [ "Authorization: Client-ID $client_id" ]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, "https://api.imgur.com/3/image.json");

curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$response = curl_exec($ch);
$response = json_decode($response, true);

if ( $response['status'] == 200 ) {
    echo "success|" . $response['data']['link'];
} else {
    echo "error|Nekaj je šlo narobe!";
}