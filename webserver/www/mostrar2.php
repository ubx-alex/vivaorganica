<?php
// archivo txt
$filas=file("/home/alex/Dropbox/eclipse_linux/panda/Debug/DATA.TXT");
// iniciamos contador y la fila a cero
$i=0;
// mientras exista una fila
echo 'probando.'
$link = mysql_connect("localhost","root","quefeo85");
mysql_select_db("panda",$link);
while($filas[$i]!=NULL){
	$i++;
// incremento contador de la fila

$row = $filas[$i-1]; 
// genero array con por medio del separador "," que es el que tiene el archivo txt
$sql = explode(";",$row);
// incrementamos contador
$temp=$sql[0];
// imprimimos datos en pantalla
mysql_query("INSERT INTO data (fecha,id_nodo,valor_sensor1,valor_sensor2,valor_sensor3,valor_sensor4)
VALUES ('$sql[0]','$sql[1]','$sql[2]','$sql[3]','$sql[4]','$sql[5]')",$link);
// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysql_error($link);

echo 'Fecha en UTC: '.$sql[0].'<br/>';
echo 'ID Nodo sensor'.$sql[1].'<br/>';
echo 'Valor sensor 1		'.$sql[2].'<br/>';
echo 'Valor sensor 2		'.$sql[3].'<br/>';
echo 'Valor sensor 3		'.$sql[4].'<br/>';
echo 'Valor sensor 4		'.$sql[5].'<br/>';
echo 'ifecha 	'.$temp.'<br/>'; 
echo date('l jS \of F Y h:i:s A',$temp);  
if(!empty($my_error) {

    echo "Ha habido un error al insertar los valores. $my_error";

} else {

    echo "Los datos han sido introducidos satisfactoriamente";

}
}


$i++;
?>