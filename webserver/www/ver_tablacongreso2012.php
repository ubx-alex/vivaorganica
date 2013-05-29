

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
/* TO DO  crear sensores.php en donde depediendo el valor de un indice del sensor y del voltaje se devolvera el valor por lo que se necesitara
hacer un buscarsensor.php el cual ire a la tabla descripcion y nos dara el sensor del cual se esta buscando en la ver tabla ( ver si se pude
mandar a llamar dos variables)*/

$username="root";
$password="quefeo85";
$database="congreso2012";

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM datos";
$result=mysql_query($query);

$num=mysql_numrows($result);


$timestamp = strtotime($_POST['fecha']);
$due1 = date('m-d-Y', $timestamp);

$timestamp1 = strtotime($_POST['fecha2']);
$timestamp2 = strtotime($due1);

$fecha_final=$timestamp1+86399;

mysql_close();
?>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Id del Nodo :  <?php echo $_POST['id_nodo']; ?></font></th>
<tr>
<tr>
<tr>
<th><font face="Arial, Helvetica, sans-serif">Fecha</font></th>
<th><font face="Arial, Helvetica, sans-serif">Valor del Sensor </font></th>
<?php
//include("Calcular_Voltaje.php");
//include("buscar_sensor.php");
//include("sensores.php");
include("ValorSensor.php");

$i=0;
$bandera_fecha=0;
$bandera_nodo=0;
$nodog=$_POST['id_nodo'];
$numsensor=$_POST['no_sensor'];
while ($i < $num) {

//$f1=mysql_result($result,$i,"fecha");
$Tipo=mysql_result($result,$i,"Tipo");
if ($_POST['no_sensor']==$Tipo){
$ValorAdc=mysql_result($result,$i,"ValorAdc");
}

$nodo=mysql_result($result,$i,"IdNodo");
$fecha=mysql_result($result,$i,"Calendario");

if (($_POST['id_nodo']==$nodo) && ($_POST['no_sensor']==$Tipo)){
  if (($fecha>=$timestamp) && ($fecha<$fecha_final)){
	$bandera=1;
	//$hora = date("d:m:Y:H:i",$fecha);
	$hora = date("d:H:i",$fecha);	
	$example_data[] = array($hora,($hora) => $ValorAdc);
	$campos++;
      if ($_POST['no_sensor']==0){
$labelejey= "Grados Centigrados"; //10 mV por grado
$ValorAdc=$ValorAdc*0.004887586;
$ValorAdc=$ValorAdc*100;

}
if ($_POST['no_sensor']==1){
$labelejey= "% de Luz";
$ValorAdc=$ValorAdc*0.004887586;
$ValorAdc=$ValorAdc/5;
$ValorAdc=$ValorAdc*100;

}

if ($_POST['no_sensor']==2){
$labelejey= "Voltaje";
$ValorAdc=$ValorAdc*0.004887586;
}

?>
<tr>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo date('l jS \of F Y h:i:s A',$fecha),'---------------------------------------->'; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $ValorAdc; ?></font></td>
</tr>

<?php

  }
}



  




$i++;
  }








if ($bandera==0){

echo 'Error el nodo no existe.';
echo 'fecha  formulario   1 :' .$timestamp. '<br/>';
echo 'fecha  formulario   2 :' .$timestamp1. '<br/>';
echo 'fecha  final   2 :' .$fecha_final. '<br/>';

echo 'fecha base      :' .$fecha. '<br/>';

$today = date("H:i",$fecha);

echo 'hora      :' .$today. '<br/>';


}
  
?>


</ul>
</body></html>