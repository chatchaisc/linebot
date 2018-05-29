<?php

require "vendor/autoload.php";

$access_token = 'kao5Fb3dkkHaqbKEPdnqJK4FXuQ9N9i2NZx8/WQB3j8EMQTehzRIfb89jLmzU6BhCu8PXat2Lv2b4MXsM7lghWOo04/BFkOnzrWJVls0hU+A5SWKyhaLwMExJ6+Gp1OqatfpHBQMTyc41YAGSK7hoAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







