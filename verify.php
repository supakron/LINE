<?php
$access_token = 'ww1zZVt7iJwXZxE9y6+Q75kTSmyIV71i+awke6AGS/BoaLjMriym7n0inJfYLaylgWGee6E5XmMfIa/oM/YCKF3HW12G0X6LAtNgqygrYW+4BANxam6T/PNdUKE17bvLjb7hQrXbZAw9j+/0ZMq5lAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
