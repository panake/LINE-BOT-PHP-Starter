<?php
$content = file_get_contents('php://input');
$events = json_decode($content, true);
if (!is_null($events['events'])) {
  $url = 'http://richflag.com';
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
  $result = curl_exec($ch);			
  curl_close($ch);			
  echo $result . "";
  echo "zzz";
} else {
  echo "boo";
}
