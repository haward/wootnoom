<?php
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

			

			$message_template = '{
			  "type": "template",
			  "altText": "this is a image carousel template",
			  "template": {
			      "type": "image_carousel",
			      "columns": [
			          {
			            "imageUrl": "https://wootnoom.herokuapp.com/media/pic1.jpg",
			            "action": {
			              "type": "postback",
			              "label": "Buy",
			              "data": "action=buy&itemid=111"
			            }
			          },
			          {
			            "imageUrl": "https://wootnoom.herokuapp.com/media/pic2.jpg",
			            "action": {
			              "type": "message",
			              "label": "Yes",
			              "text": "yes"
			            }
			          },
			          {
			            "imageUrl": "https://wootnoom.herokuapp.com/media/pic3.jpg",
			            "action": {
			              "type": "uri",
			              "label": "View detail",
			              "uri": "http://example.com/page/222"
			            }
			          }
			      ]
			  }
			}';

			// Build message to reply back
			/*$messages = [
				'type' => 'text',
				'text' => $text
			];*/

			// Build message to reply back
			$messages = json_decode($message_template, true);

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
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
echo "OK";