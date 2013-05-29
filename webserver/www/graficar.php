<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <title>Sistema de Monitoreo para la Medicion de Variables Agricolas </title>
  <link rel="icon" href="vivaorganica.ico" type="image/x-icon">
  <link href="index.css" rel="stylesheet" type="text/css" />
<body>

	<h1>Sistema de Monitoreo para la Medicion de Variables Agricolas </h1>
	<h2>FIAD </h2>
	<div id="logoVivaOrganica"></div>
	<div id="logoUabc"></div>
	<script language='javascript' src="popcalendar.js"></script> 

<h6>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Tipo Sensor  </font></th>
<tr>
<tr>
<tr>
<th><font face="Arial, Helvetica, sans-serif">1 : temperatura</font></th>
<th><font face="Arial, Helvetica, sans-serif">2 : Luz</font></th>
<th><font face="Arial, Helvetica, sans-serif">3 : Potenciometro</font></th>


<form name="webtaller" action="graficarViva.php" method="post"><br>
<br>
  <br>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  
  <big><big>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Consultar  Grafica de un Nodo.</big></big><br>
  <br>
<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Id nodo: <input name="id_nodo" type="text"><br><br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Numero de sensor a consultar:
  <select name="no_sensor">
  <option value="0">Cero</option>
  <option value="1">Uno</option>
  <option value="2">Dos</option>
  <option value="3">Tres</option>
  </select>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
  <br><br>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  Fecha Inicial <input name="fecha" type="text" id="dateArrival" onClick="popUpCalendar(this, webtaller.dateArrival, 'dd-mm-yyyy');" size="10">
 <br><br>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  Fecha Final <input name="fecha2" type="text" id="dateArrival1" onClick="popUpCalendar(this, webtaller.dateArrival1, 'dd-mm-yyyy');" size="10">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="Ver Grafica" type="submit"></form>
  <br>  <br>  
</h6>
</body>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src='https://www.google.com/jsapi'></script>
	
	
</body>
</html>