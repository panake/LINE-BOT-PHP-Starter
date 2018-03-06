<?php
$content = file_get_contents('php://input');
$events = json_decode($content, true);
if (!is_null($events['events'])) {
  foreach ($events['events'] as $event) {	
    if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
      $text = $event['message']['text'];	
      $replyToken = $event['replyToken'];	
      $messages = [				
      'type' => 'text',				
      'text' => $text			
      ];
      $url = 'http://richflag.com';
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
      $result = curl_exec($ch);			
      curl_close($ch);			
      echo $result . "";
      echo "zzz";
    }
  }
} else {
  echo "boo";
}
