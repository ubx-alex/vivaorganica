

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
<th><font face="Arial, Helvetica, sans-serif">Sensor 1</font></th>
<th><font face="Arial, Helvetica, sans-serif">Sensor 2</font></th>
<th><font face="Arial, Helvetica, sans-serif">Sensor 3</font></th>
<th><font face="Arial, Helvetica, sans-serif">Sensor 4</font></th>
<th><font face="Arial, Helvetica, sans-serif">Descripcion</font></th>
<th><font face="Arial, Helvetica, sans-serif">Ubicacion</font></th>









<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"id_nodo");
$f2=mysql_result($result,$i,"estatus");
$f3=mysql_result($result,$i,"no_sensores");
$f4=mysql_result($result,$i,"sensor1");
$f5=mysql_result($result,$i,"sensor2");
$f6=mysql_result($result,$i,"sensor3");
$f7=mysql_result($result,$i,"sensor4");
$f8=mysql_result($result,$i,"Descripcion");
$f9=mysql_result($result,$i,"Ubicacion");
?>
<tr>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f9; ?></font></td>

</tr>

<?php
$i++;
}
?>


  




</body></html>