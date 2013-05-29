<?php

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

$Tipo=mysql_result($result,$num-1,"Calendario");
$encontrados = 0;
$contador = 1;
while ($encontrados ==0) {
	$num--;
	$nodo=mysql_result($result,$num,"IdNodo");
	$ValorAdc=mysql_result($result,$num,"ValorAdc");
	$Tipo=mysql_result($result,$num,"Tipo");
	

	if ($nodo == 1231){
	
		if ($Tipo == 0){
			$voltaje1231temp = $ValorAdc;
		}
		if ($Tipo == 1){
			$ValorAdc=$ValorAdc*0.004887586;
			$ValorAdc=$ValorAdc/5;
			$ValorAdc=$ValorAdc*100;
			$voltaje1231luz = $ValorAdc;
		}
		if ($Tipo == 2){
			//0.0391 Vout -42.5
			$ValorAdc=($ValorAdc*0.004887586)*1000;
			$ValorAdc=$ValorAdc*0.0391;
			$ValorAdc=$ValorAdc-42.5;
			$voltaje1231humedad = $ValorAdc;
		}
	}	
	if ($nodo == 1232){
		if ($Tipo == 0){
			$voltaje1232temp = $ValorAdc;
		}
		if ($Tipo == 1){
			$ValorAdc=$ValorAdc*0.004887586;
			$ValorAdc=$ValorAdc/5;
			$ValorAdc=$ValorAdc*100;
			$voltaje1232luz = $ValorAdc;
		}
		if ($Tipo == 2){
			$ValorAdc=($ValorAdc*0.004887586)*1000;
			$ValorAdc=$ValorAdc*0.0391;
			$ValorAdc=$ValorAdc-42.5;
			$voltaje1232humedad = $ValorAdc;
		}
	}
	if ($nodo == 1233){
		if ($Tipo == 0){
			$voltaje1233temp = $ValorAdc;
		}
		if ($Tipo == 1){
			$ValorAdc=$ValorAdc*0.004887586;
			$ValorAdc=$ValorAdc/5;
			$ValorAdc=$ValorAdc*100;
			$voltaje1233luz = $ValorAdc;
		}
		if ($Tipo == 2){
			$ValorAdc=($ValorAdc*0.004887586)*1000;
			$ValorAdc=$ValorAdc*0.0391;
			$ValorAdc=$ValorAdc-42.5;
			$voltaje1233humedad = $ValorAdc;
		}
		
	$contador++;
		
	
	}
	if ($contador == 9){
		$encontrados = 1;
	}

} 
//echo "foo es $foo";
//echo 'fecha base      :' .$fecha. '<br/>';
/*echo '1231 temp      :' .$voltaje1231temp. '<br/>';
echo '1231 luz      :' .$voltaje1231luz. '<br/>';
echo '1231 humedad      :' .$voltaje1231humedad. '<br/>';
echo '1232 temp      :' .$voltaje1232temp. '<br/>';
echo '1232 luz      :' .$voltaje1232luz. '<br/>';
echo '1232 humedad      :' .$voltaje1232humedad. '<br/>';
echo '1233 temp      :' .$voltaje1233temp. '<br/>';
echo '1233 luz      :' .$voltaje1233luz. '<br/>';
echo '1233 humedad      :' .$voltaje1233humedad. '<br/>';
//print {"countWeigthScaleSamplesLb":" %s ,dateLastSampleWeightLb: %s ,valueLastSampleWeightLb: %s ,valueLastSampleWeightKg: %s }" % (countWeigthScaleSamplesLb , dateLastSampleWeightLb , valueLastSampleWeightLb , valueLastSampleWeightKg)
*/
echo '{"voltaje1231temp":"'.$voltaje1231temp.'","voltaje1231luz":"'.$voltaje1231luz.'","voltaje1231humedad":"'.$voltaje1231humedad.'","voltaje1232temp":"'.$voltaje1232temp.'","voltaje1232luz":"'.$voltaje1232luz.'","voltaje1232humedad":"'.$voltaje1232humedad.'","voltaje1233temp":"'.$voltaje1233temp.'","voltaje1233luz":"'.$voltaje1233luz.'","voltaje1233humedad":"'.$voltaje1233humedad.'"}';
//echo '{"voltaje1231temp":"'.$voltaje1231temp.'"}';

?>