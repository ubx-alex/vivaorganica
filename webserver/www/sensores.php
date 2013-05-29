<?php
function sensor($tipo,$voltaje)
{

if ($tipo==1){ //Humirel
$valor=((0.0391*$voltaje)*1000)-42.5;

}
if ($tipo==2){ //sonda de temperatura
$R=(33/$voltaje)-10;
$A=0.002773158328763;
$B=0.000250127116199;
$C=0.000000402941348;
$logR=log($R);
$logRB=$logR*$B;
$logRC=$logR*$C;
$cubo=pow($logRC,3);
$denominador=$A+$logRB+$cubo;
$fraccion=1/$denominador;
$valor=(int)($fraccion-273.15);
//$valor= (1/($A + ($B∗log($R)) + pow(($C∗log($R)),3) )) − 273.15;
//$valor=1;



}
if ($tipo==3){ //humedad del suelo
$valor=($voltaje/.0117155);
}
if ($tipo==4){
$valor=$voltaje+4;

}


return $valor;  
}
?>

