<?php



/***************************************************************************/


$username="root";
$password="";
$database="test";

mysql_connect('localhost',$username,$password);
mysql_select_db('vivaorganica') or die( "Unable to select database");
$query="SELECT * FROM 013a204066da45";
$result=mysql_query($query);
/*****************************************/

  /****************************************/
$num=mysql_numrows($result);
//$Tipo=mysql_result($result,$num-1,"Calendario");
$fecha = mysql_result($result, $num-1,"fecha");
$adc1 = mysql_result($result, $num-1,"adc1");
$adc2 = mysql_result($result, $num-1,"adc2");


mysql_close();

$date = date('l jS \of F Y h:i:s A',$fecha); 
echo '{"fecha":"'.$date.'","adc1":"'.$adc1.'","adc2":"'.$adc2.'"}';
//echo '{"voltaje1231temp":"'.$voltaje1231temp.'","voltaje1231luz":"'.$voltaje1231luz.'","voltaje1231humedad":"'.$voltaje1231humedad.'","voltaje1232temp":"'.$voltaje1232temp.'","voltaje1232luz":"'.$voltaje1232luz.'","voltaje1232humedad":"'.$voltaje1232humedad.'","voltaje1233temp":"'.$voltaje1233temp.'","voltaje1233luz":"'.$voltaje1233luz.'","voltaje1233humedad":"'.$voltaje1233humedad.'"}';
//echo '{"voltaje1231temp":"'.$voltaje1231temp.'"}';

?>