<?php
//Include the code


include ('phplot-5.5.0/phplot.php');
//include ('buscar_sensor.php');

//echo 'probando:  ' .$_POST['id_nodo']. '<br/>'; 
//$nodo=$_POST['id_nodo'];


//Define the object


//new PHPlot(800, 600); 

//Define some data
$i=0;

/***************************************************************************/


$username="root";
$password="vivaorganica";
$database="congreso2012";

mysql_connect('localhost',$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM datos";
$result=mysql_query($query);
/*****************************************/

  /****************************************/
$num=mysql_numrows($result);

$query1="SELECT * FROM descripcion";
$result1=mysql_query($query1);

$num1=mysql_numrows($result1);


mysql_close();
/*****************************************************************************/

$timestamp = strtotime($_POST['fecha']);
$due1 = date('m-d-Y', $timestamp);

$timestamp1 = strtotime($_POST['fecha2']);
$timestamp2 = strtotime($due1);

$fecha_final=$timestamp1+86399;

$i=0;
$buscado=0;
//$nodo=mysql_result($result,$i,"id_nodo");
//$fecha=mysql_result($result,$i,"fecha");

$bandera_fecha=0;
$bandera_nodo=0;
//if( ($_POST['id_nodo']==$nodo) && ($timestamp>=$fecha) && ($timestamp1>=$timestamp)){
$bandera=0;
//}
$campos=1;

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


if (($_POST['id_nodo']==$nodo) && ($_POST['no_sensor']==$Tipo) ){
  if (($fecha>=$timestamp) && ($fecha<$fecha_final)){
	$bandera=1;
	//$hora = date("d:m:Y:H:i",$fecha);
	$hora = date("H:i",$fecha);	
	$example_data[] = array($hora,($hora) => $ValorAdc);
	$campos++;
  }
}

$i++;

  

}


$titulo=  "Grafica del nodo $nodog Canal($numsensor) $titulo2";
$graph =& new PHPlot($100*42,600);
$graph->SetTitle($titulo);

$graph->SetDataValues($example_data);
//$graph->SetDataType('example_data-example_data');
$graph->SetPlotAreaWorld(NULL, 0, NULL, NULL);
//Draw it
$graph->SetDrawXGrid(True);
$graph->SetDrawYGrid(True);
$graph->SetYTitle($labelejey);
$graph->SetXTitle('Fecha dia:hora:minuto');
//$graph->SetPlotAreaBgImage('tomate.jpg');
//$graph->SetYDataLabelPos('plotin');

if ($bandera==1){
echo 'loading...';
//$graph->DrawGraph(); // remember, since in this example we have one graph, PHPlot
                        // does the PrintImage part for you

}
else{
echo 'Error el nodo no existe.';
/*echo 'fecha  formulario   1 :' .$timestamp. '<br/>';
echo 'fecha  formulario   2 :' .$timestamp1. '<br/>';
echo 'fecha  final   2 :' .$fecha_final. '<br/>';

echo 'fecha base      :' .$fecha. '<br/>';

$today = date("H:i",$fecha);

echo 'hora      :' .$today. '<br/>';

echo 'valor      :' .$voltajeF. '<br/>';
echo 'valor      :' .$voltajeV. '<br/>';
echo 'valor      :' .$valor. '<br/>';
*/

}


?>