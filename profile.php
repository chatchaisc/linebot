<?php


$access_token = 'kao5Fb3dkkHaqbKEPdnqJK4FXuQ9N9i2NZx8/WQB3j8EMQTehzRIfb89jLmzU6BhCu8PXat2Lv2b4MXsM7lghWOo04/BFkOnzrWJVls0hU+A5SWKyhaLwMExJ6+Gp1OqatfpHBQMTyc41YAGSK7hoAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

