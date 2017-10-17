<?php
$access_token = '4kQ/BkzMwQdHPsK3ndXIuAVuRlkljv89ikV0SlSRW+bgPOfmmm+nS47ZtN0okz8s7+Bad4yFcH/CibvXITr7qSS+vTTZE35Zoq5KtwtvkW0x1g9OGpG/fOM33rSEztsGqMWPyXZPYPHYjzCjiubdiQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;