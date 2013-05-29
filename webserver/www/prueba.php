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
$database="panda";

mysql_connect(localhost,$username,$password);
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

if ($_POST['no_sensor']==1){
$f2=mysql_result($result,$i,"valor_sensor1");
}
if ($_POST['no_sensor']==2){
$f2=mysql_result($result,$i,"valor_sensor2");
}
if ($_POST['no_sensor']==3){
$f2=mysql_result($result,$i,"valor_sensor3");
}
if ($_POST['no_sensor']==4){
$f2=mysql_result($result,$i,"valor_sensor4");
}

if ($f2>255){
    if (($f2>=1000) && ($f2<2000)){
	$temp=$f2-1000;
	$voltaje=$temp+256;
	$voltajeV=$voltaje*0.003225806;
    }
  }

  if ($f2>255){
    if (($f2>=2000) && ($f2<3000)){
	$temp=$f2-2000;
	$voltaje=$temp+512;
	$voltajeV=$voltaje*0.003225806;
    }
  }

  if ($f2>255){
    if (($f2>=3000) && ($f2<4000)){
	$temp=$f2-3000;
	$voltaje=$temp+768;
    $voltajeV=$voltaje*0.003225806;
    }
  }

  if ($f2<256){
    $voltaje=$f2;
    $voltajeV=$voltaje*0.003225806;
  }
/****u**************************************************************************************************/
//6461461631 marco.
//
















$voltajeV=$voltajeV-0.3;
$i1=0;
if ($buscado==0){
while ($i1 < $num1) {
$id_nodo1=mysql_result($result1,$i1,"id_nodo");
if ($id_nodo1==$nodog){
    If ($numsensor==1){
      $tipo=mysql_result($result1,$i1,"sensor1");
    }
    If ($numsensor==2){
      $tipo=mysql_result($result1,$i1,"sensor2");
    }
    If ($numsensor==3){
      $tipo=mysql_result($result1,$i1,"sensor3");
    }
    If ($numsensor==4){
      $tipo=mysql_result($result1,$i1,"sensor4");
    }


}
$i1++;

}
$buscado=1;
}
/********************************************************************************************************************************/

if ($tipo==1){ //Humirel
$valor=((0.0391*$voltajeV)*1000)-42.5;
$titulo2='Sensor de Humedad Relativa Humirel 15000 [%]';
$labelejey='%';
}
if ($tipo==2){ //sonda de temperatura
$R=(33/$voltajeV)-10;
$A=0.002773158328763;
$B=0.000250127116199;
$C=0.000000402941348;
$logR=log($R);
$logRB=$logR*$B;
$logRC=$logR*$C;
$cubo=pow($logRC,3);
$denominador=$A+$logRB+$cubo;
$fraccion=1/$denominador;
$valor=$fraccion-273.15;
//$valor= (1/($A + ($B∗log($R)) + pow(($C∗log($R)),3) )) − 273.15;
//$valor=1;
$titulo2='Sensor de temperatura (Sonda) [Centigrados]';
$labelejey='Centigrados';


}
if ($tipo==3){ //humedad del suelo
$valor=($voltajeV/.0117155);
$titulo2='Sensor de Humedad del suelo [Centibares]';
$labelejey='Centibares';
}
if ($tipo==4){
$valor=$voltajeV+4;
$titulo2='pendiente';
$labelejey='pendiente';

}


/**************************************************************************************************************************/

$nodo=mysql_result($result,$i,"id_nodo");
$fecha=mysql_result($result,$i,"fecha");

if ($_POST['id_nodo']==$nodo){
  if (($fecha>=$timestamp) && ($fecha<$fecha_final)){
	$bandera=1;
	//$hora = date("d:m:Y:H:i",$fecha);
	$hora = date("d:H:i",$fecha);
	$example_data[] = array($hora,($hora) => $valor);
	$campos++;
  }
}

$i++;

  

}





$titulo=  "Grafica del nodo $nodog  $titulo2";
$graph =& new PHPlot($campos*42,600);
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
$graph->DrawGraph(); // remember, since in this example we have one graph, PHPlot
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