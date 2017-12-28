<?php

$botToken = "485446580:AAH96fgUtkDjsd1fN-XHFVitCryoOgC2ChE";
$website = 	"https://api.telegram.org/bot".$botToken;


$update = file_get_contents("php://input"));
$updateArray = json_decode($update, true);
$chatId = $updateArray["result"][0]["chat"]["id"];
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");


?>
