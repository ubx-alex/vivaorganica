

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



<?php

$username="root";
$password="quefeo85";
$database="panda";

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM descripcion";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
?>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Nodos Disponibles :  <?php echo $num; ?></font></th>
<tr>
<tr>
<tr>
<th><font face="Arial, Helvetica, sans-serif">Id Nodo</font></th>
<th><font face="Arial, Helvetica, sans-serif">Estado [Activo=1 Inactivo=0 ]</font></th>
<th><font face="Arial, Helvetica, sans-serif">Numero de Sensores</font></th>
<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"id_nodo");
$f2=mysql_result($result,$i,"estatus");
$f3=mysql_result($result,$i,"no_sensores");
?>
<tr>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
</tr>

<?php
$i++;
}
?>

<form name="webtaller" action="prueba.php" method="post"><br>
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
  <option value="1">Uno</option>
  <option value="2">Dos</option>
  <option value="3">Tres</option>
  <option value="4">Cuatro</option>
  </select>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
  <br><br>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  Fecha Inicial <input name="fecha" type="text" id="dateArrival" onClick="popUpCalendar(this, webtaller.dateArrival, 'dd-mm-yyyy');" size="10">
 <br><br>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  Fecha Final <input name="fecha2" type="text" id="dateArrival1" onClick="popUpCalendar(this, webtaller.dateArrival1, 'dd-mm-yyyy');" size="10">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="Ver Grafica" type="submit"></form>
  <br>  <br>  
<ul>

<form name="VerTabla" action="ver_tabla.php" method="post"><br>
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
  <option value="1">Uno</option>
  <option value="2">Dos</option>
  <option value="3">Tres</option>
  <option value="4">Cuatro</option>
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