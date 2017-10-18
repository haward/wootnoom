<?php

// Turn off all error reporting
//error_reporting(0);

// Report simple running errors
//error_reporting(E_ERROR);
require_once ("configuration.php");
require_once("util.php");

$util = new Util($CONFIGURATION);


$access_token = '4kQ/BkzMwQdHPsK3ndXIuAVuRlkljv89ikV0SlSRW+bgPOfmmm+nS47ZtN0okz8s7+Bad4yFcH/CibvXITr7qSS+vTTZE35Zoq5KtwtvkW0x1g9OGpG/fOM33rSEztsGqMWPyXZPYPHYjzCjiubdiQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			$answer_message = $util->getAnswer($text);
			//echo $answer_message;
			// Build message to reply back
			$messages = json_decode($answer_message, true);

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => $messages,
			];
			$post = json_encode($data);
			//echo $post;
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
