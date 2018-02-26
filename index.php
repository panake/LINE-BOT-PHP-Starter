<?php
$content = file_get_contents('php://input');
if (!is_null($content)){
 $events = json_decode($content, true);
 ehco $content;
}
echo "OK XXX";
