<?php

$r = file_get_contents("http://HHH_demo:homehealthhub@developer.idigi.com/ws/DiaChannelDataHistoryFull");
$x = simplexml_load_string($r);
$j = json_encode($x);

echo $j;
?>