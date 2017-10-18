<?php

	date_default_timezone_set('Asia/Bangkok');
	require_once("user.php");
	require_once("userManager.php");

	$access_token = '4kQ/BkzMwQdHPsK3ndXIuAVuRlkljv89ikV0SlSRW+bgPOfmmm+nS47ZtN0okz8s7+Bad4yFcH/CibvXITr7qSS+vTTZE35Zoq5KtwtvkW0x1g9OGpG/fOM33rSEztsGqMWPyXZPYPHYjzCjiubdiQdB04t89/1O/w1cDnyilFU=';
	// Make a POST Request to Messaging API to reply to sender
	$url = 'https://api.line.me/v2/bot/message/multicast';

	$param = $_GET;

	/*
	echo date("j, n, Y");

$day = date("j");
$month = date("j");
$year = date("Y");
	*/

	if(isset($param['data'])) {
		$type = $param['data'];
		$message = '';
		switch ($type) {
			case '1':
				$message = 'ใกล้จะถึงงานแต่ง Noom & Woot แล้วนะครับ เตรียมตัวกันรึยัง';
				break;
			case '2':
				$message = 'ขอขอบคุณทุกท่านท่ามาร่วมงานนะครับ ขอขอบคุณจริงๆจากใจ Noom & Woot';
				break;
			
			default:
				# code...
				break;
		}

		if($message !== '') {
			$messages = array(
				"type" => "text",
				"text" => $message
			);

			$userManager = new userManager();
			$users = $userManager->getUserKey();

			$data = [
				'to' => $users,
				'messages' => [$messages],
			];

			$post = json_encode($data);
			echo $post;
			
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			//print_r($result );
			//echo 'message sent';
		} else {
			echo 'invalid data';
		}

		
	} else {
		echo 'parameter is incorrect : ?data=1';
	}

function checkDate() {

	$valid = false;

	$day = date("j");
	$month = date("j");
	$year = date("Y");


	if($day == '1' && $month == '12' && $year == "2017") {
		$valid = true;
		$type  = 1;
	}

	if($day == '1' && $month == '12' && $year == "2017") {
		$valid = true;
		$type  = 2;
	}


	

	
}
	

