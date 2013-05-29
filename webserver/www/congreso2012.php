

<html><head>
  
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>index.html</title>
<script language='javascript' src="popcalendar.js"></script> 

  
</head><body style="color: rgb(0, 0, 0); background-color: rgb(0, 153, 0);" alink="#000099" link="#000099" vlink="#990099">
<div style="text-align: center;"><big><big><big>Universidad Autonoma de
Baja California.</big></big></big>
</div>

<div style="text-align: center;"><br>
<img style="width: 80px; height: 116px;" alt="escudo" src="escudo_uabc_gr1.jpg"><br>
<br>
<br>
</div>




<table border="0" cellspacing="2" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Tipo Sensor  </font></th>
<tr>
<tr>
<tr>
<th><font face="Arial, Helvetica, sans-serif">1 : temperatura</font></th>
<th><font face="Arial, Helvetica, sans-serif">2 : Luz</font></th>
<th><font face="Arial, Helvetica, sans-serif">3 : Potenciometro</font></th>


<form name="webtaller" action="pruebacongreso2012.php" method="post"><br>
<br>
  <br>
  
  
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
<ul>

<form name="VerTabla" action="ver_tablacongreso2012.php" method="post"><br>
<br>
  <br>
  
  
  <big><big> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Consultar  Tabla de un Nodo.</big></big><br>
  <br>
<br>
 &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Id nodo: <input name="id_nodo" type="text"><br><br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; Numero de sensor a consultar:
  <select name="no_sensor">
  <option value="0">Cero</option>
  <option value="1">Uno</option>
  <option value="2">Dos</option>
  <option value="3">Tres</option>
  </select>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
  <br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  Fecha Inicial <input name="fecha" type="text" id="dateArrival3" onClick="popUpCalendar(this, VerTabla.dateArrival3, 'dd-mm-yyyy');" size="10">
 <br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  Fecha Final <input name="fecha2" type="text" id="dateArrival4" onClick="popUpCalendar(this, VerTabla.dateArrival4, 'dd-mm-yyyy');" size="10">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="Ver Tabla" type="submit"></form>
  <br>  <br>  	
<ul>
  



</ul>
</body></html>