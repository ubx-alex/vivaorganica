<?php

$r = file_get_contents("http://HHH_demo:homehealthhub@developer.idigi.com/ws/DiaChannelDataFull?condition=(devConnectwareId='00000000-00000000-00409DFF-FF564633'%20and%20ddInstanceName='bpcuff0')");
$x = simplexml_load_string($r);
$j = json_encode($x);

echo $j;


?>