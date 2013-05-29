<?
/*Primero calculamos voltaje*/
function CalcularVoltaje($f2)
{
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
return $voltajeV;
}


?>