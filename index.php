<?php
$content = file_get_contents('php://input');
$url = 'https://richflag.com:8080/webhook';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$result = curl_exec($ch);			
curl_close($ch);			
echo $result . "";
echo "zzz";
