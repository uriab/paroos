<?php


$update = json_decode{file_get_contents('php://input')};

$chatid = $update->message->chat->id;
$message_id = $update->message->message_id;;
$text = $update->message-text;


function makeCurl($method,$datas,$api){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot{$api}/{$method}");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		http_build_quuery($datas));
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$server_output = curl_exec ($ch);
	curl_close ($ch);
	return json_decode($server_output);

}

makeCurl(
		'sendMessage',
		[
			'chat_id'=>chatid,
			'text'=>$text,
			'reply_to_message_id'=>$message_id,
			'parse_mode'=>'HTML'
		]
		'485446580:AAH96fgUtkDjsd1fN-XHFVitCryoOgC2ChE'
	);
?>
