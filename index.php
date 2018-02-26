<?php
$content = file_get_contents('php://input');
if (!is_null($content)){
 echo "YYY"; 
}
echo "OK XXX";
