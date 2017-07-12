<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '7a08e55ac1cac0b35e1c8c06ee979027';
$access_token  = 'YlNJn7qhXPhJuFCUa/BtMXLqYsQ3kppWces6UCmb4CnhzWfkeIFi02yJLmdHdEADaLiqIe+5+QBUnxApYDPxdKuaj8HTX70jCrkaMO8VVKg7rCYBoz54Hfq4/WVdzkTHvYvCJjTsv6gs1jWdxGvQOgdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}

