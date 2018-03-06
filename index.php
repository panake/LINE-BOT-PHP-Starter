<?php
$content = file_get_contents('php://input');
$url = 'https://richflag.com:8080/webhook';
$ch = curl_init($url);
echo "yyy";
