<?php
$content = file_get_contents('php://input');
$events = json_decode($content, true);
if (!is_null($events['events'])) {
  foreach ($events['events'] as $event) {	
    if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
      $text = $event['message']['text'];	
      $userId = $event['source']['userId'];
      $groupId = $event['source']['groupId'];
      $replyToken = $event['replyToken'];	
      $messages = [				
        'type' => 'text',				
        'text' => $text,
        'groupId' => $groupId,
        'userId' => $userId	
      ];
      $url = 'http://128.199.152.70/webhook';
      $data = [				
        'replyToken' => $replyToken,				
        'messages' => [$messages],			
      ];			
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);	
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");			
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);			
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);			
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);			
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);			
      curl_close($ch);			
      echo $result . "";
      echo "1111";
    }
  }
} else {
  echo "0000";
}
