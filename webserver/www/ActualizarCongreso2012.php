<?php $con = mysql_connect("localhost","root","vivaorganica");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("congreso2012", $con);

//$q = 'select * from datos';
$q = 'SELECT *FROM datos';
$datos= mysql_query($q, $con) or die ("problema con query");
$ii= 0;
$i=0;
$ii = mysql_num_rows($datos);
if($ii==0){
$filas=file("/home/alex/Dropbox/eclipse_linux/congreso2012/Debug/DATA.TXT");
//echo 'Actualizando toda la base de datos.' '<br/>';
while($filas[$i]!=NULL){
$i++;
// incremento contador de la fila

$row = $filas[$i-1];
// genero array con por medio del separador "," que es el que tiene el archivo txt
$sql = explode(";",$row);
// incrementamos contador
$temp=$sql[0];
// imprimimos datos en pantalla

/*echo 'filas'.$ii. '<br/>';

echo 'Fecha en UTC: '.$sql[0].'<br/>';
echo 'ID Nodo sensor'.$sql[1].'<br/>';
echo 'Valor sensor 1 '.$sql[2].'<br/>';
echo 'Valor sensor 2 '.$sql[3].'<br/>';
echo 'Valor sensor 3 '.$sql[4].'<br/>';
echo 'Valor sensor 4 '.$sql[5].'<br/>';
echo 'ifecha '.$temp.'<br/>';
echo date('l jS \of F Y h:i:s A',$temp);
*/
mysql_query("INSERT INTO datos (Calendario,IdNodo,Tipo,ValorAdc)
VALUES ('$sql[0]', '$sql[1]', '$sql[2]','$sql[3]')");
}
echo 'Tabla vacia , numero de registros actualizados : '.$i.'<br/>';
}
mysql_close($con);

if ($ii>0){
$nuevos_registros=0;
$filas=file("/home/alex/Dropbox/eclipse_linux/congreso2012/Debug/DATA.TXT");
$filas_txt=0;
while($filas[$filas_txt]!=NULL){
$filas_txt++;
}
for($j=0;$j<$filas_txt;$j++)
{
// incremento contador de la fila

$row = $filas[$j]; //alex
// genero array con por medio del separador "," que es el que tiene el archivo txt
$sql = explode(";",$row);
// incrementamos contador
$temp=$sql[0];
// imprimimos datos en pantalla
/*
echo 'filas'.$filas_txt. '<br/>';

echo 'filas'.$j. '<br/>';

echo 'Fecha en UTC: '.$sql[0].'<br/>';
echo 'ID Nodo sensor'.$sql[1].'<br/>';
echo 'Valor sensor 1 '.$sql[2].'<br/>';
echo 'Valor sensor 2 '.$sql[3].'<br/>';
echo 'Valor sensor 3 '.$sql[4].'<br/>';
echo 'Valor sensor 4 '.$sql[5].'<br/>';
echo 'ifecha '.$temp.'<br/>';
echo date('l jS \of F Y h:i:s A',$temp);
*/
$con = mysql_connect("localhost","root","quefeo85");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("congreso2012", $con);

//$q = 'select * from datos';
$q = 'SELECT *FROM datos';
$datos= mysql_query($q, $con) or die ("problema con query");
$encontrado=0;
//while($renglon = mysql_fetch_row($datos))
$ii = mysql_num_rows($datos);
for($i=0;$i<$ii;$i++)
{
if($renglon = mysql_fetch_row($datos)){
if ($renglon[0]==$sql[0]){
//while($renglon = mysql_fetch_row($datos))
$encontrado=1;
//echo 'en txt '.$sql[0].'<br/>';
//echo 'en sql '.$renglon[0].'<br/>';
}
}
}
if ($encontrado==0){
//echo '**************************************************************************************************************************************************';
$nuevos_registros++;
mysql_query("INSERT INTO datos (Calendario,IdNodo,Tipo,ValorAdc)
VALUES ('$sql[0]', '$sql[1]', '$sql[2]','$sql[3]')");
}


mysql_close($con);

} //while
echo 'Numero de registros actualizados : '.$nuevos_registros.'<br/>';
}

?>
<?php header("refresh: 1; url=congreso2012.php");
echo 'Espera unos segundos.';
?>
