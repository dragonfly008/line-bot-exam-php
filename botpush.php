<?php



require "vendor/autoload.php";

$access_token = 'nhbjisWmPbG+j2/8st5z9ar4C3RjCPHSW7b+ac3vpWXZ1KfTmS+ZzhL96R1oGP82OEoHp8VBfGx+ZxMrsJjvt63mvlEywvPr9VxaLVFRRpos6XnKmRHXv9pS+TpR5DSnWtVgxRwKuFZKTnrzEEPxhgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'eb3c8f1aa788d168446feb0cb8539395';

$pushID = 'U7d486c82a95c85b1a2a36b56b5378da4';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







