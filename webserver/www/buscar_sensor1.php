<?php
function BuscarSensor($IdNodo,$NumeroNodo)
{
$username="root";
$password="quefeo85";
$database="panda";

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM descripcion";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();
$i=0;
while ($i < $num) {
$id_nodo=mysql_result($result,$i,"id_nodo");
if ($id_nodo==$IdNodo){
    If ($NumeroNodo==1){
      $tipo=mysql_result($result,$i,"sensor1");
    }
    If ($NumeroNodo==2){
      $tipo=mysql_result($result,$i,"sensor2");
    }
    If ($NumeroNodo==3){
      $tipo=mysql_result($result,$i,"sensor3");
    }
    If ($NumeroNodo==4){
      $tipo=mysql_result($result,$i,"sensor4");
    }


}
$i++;

}

return $tipo;  
}
?>

