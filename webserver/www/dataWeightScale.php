<?php

$r = file_get_contents("http://HHH_demo:homehealthhub@developer.idigi.com/ws/DiaChannelDataHistoryFull?condition=(devConnectwareId='00000000-00000000-00409DFF-FF564633'%20and%20ddInstanceName='scale0')");
$x = simplexml_load_string($r);
$j = json_encode($x);

echo $j;
