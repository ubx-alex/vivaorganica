<?php

$i=0;

/***************************************************************************/


$username="root";
$password="panda85";
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
			$ValorAdc=$ValorAdc*0.004887586;
			$ValorAdc=($ValorAdc/.0117155);
			$voltaje1231humedad = $ValorAdc;
		}
	}	
	
	$contador++;
		
	
	
	if ($contador == 3){
		$encontrados = 1;
	}

} 
//echo "foo es $foo";
//echo 'fecha base      :' .$fecha. '<br/>';
echo '1231 temp      :' .$voltaje1231temp. '<br/>';
echo '1231 luz      :' .$voltaje1231luz. '<br/>';
echo '1231 humedad      :' .$voltaje1231humedad. '<br/>';


?>