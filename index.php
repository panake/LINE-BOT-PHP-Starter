<?php
$content = file_get_contents('php://input');
$url = 'https://richflag.com:8080/webhook';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
echo "xxx";
