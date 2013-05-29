<?php
include("Calcular_Voltaje.php");
include("buscar_sensor.php");
include("sensores.php");

//$ValorSensor=ValorSensor($f2,$_POST['id_nodo'],$_POST['no_sensor']);
function ValorSensor($Convertido,$IdNodo,$NoSensor)
{

$voltaje=CalcularVoltaje($Convertido);
$TipoNodo=BuscarSensor($IdNodo,$NoSensor);
$ValorSensor=sensor($TipoNodo,$voltaje);

return $ValorSensor;
}
?>