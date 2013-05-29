<html
<head>
<script language='javascript' src="popcalendar.js"></script> 
</head>
<body>
        <center> 
         <form name="form1" method="post">
           Calendario<input name="nombre_de_la_caja" type="text" id="dateArrival" onClick="popUpCalendar(this, form1.dateArrival, 'mm-dd-yyyy');" size="10">
        </form>
		  </center>
      
</html>

<?php

echo 'probando:  ' .$_POST['nombre_de_la_caja']. '<br/>'; 
$timestamp = strtotime($_POST['nombre_de_la_caja'],"%m-%d-%Y");
echo 'utc      :' .$timestamp. '<br/>';

$nextfri = strtotime("next Friday");
$due1 = date('m-d-Y', $timestamp);
echo "<br>" . $due1 . "<br>";
$due2 = date('Y-m-d', $timestamp );
echo $due2 . "<br>";
$due3 = date('d-m-Y', $timestamp );
echo $due3 . "<br>";

?>

