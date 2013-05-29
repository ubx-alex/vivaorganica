<?php
     
    // Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
  //  if(isset($_POST['id_nodo']) && !empty($_POST['id_nodo']) && isset($_POST['no_sensores']) && !empty($_POST['no_sensores']) && isset($_POST['estatus']) && !empty($_POST['estatus']) ) {

echo 'probando:  ' .$_POST['id']. '<br/>'; 
echo 'probando:  ' .$_POST['estado']. '<br/>';
echo 'probando:  ' .$_POST['coordenadas']. '<br/>';

if ($_POST['estatus']==0){ echo 'esta inactivo'; }
if ($_POST['estatus']==1){ echo 'esta activo'; }
 $fallo=0;

if (!$_POST['id']>0){ echo '     Campo id vacio     '; $fallo=1;}
if (!$_POST['estado']>0){ echo ' campo estado vacio           '; $fallo=1;}
if (!$_POST['coordenadas']>0){ echo '     Campo coordenadas       '; $fallo=1;}



if ($fallo==1){
echo 'Falta completar campos regresar al la pagina anterior y arreglarlo';
}
else{
echo 'Datos llenados satisfactoriamente';

$con = mysql_connect("localhost","root","quefeo85");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("panda", $con);



mysql_query("INSERT INTO ubicacion (id,estado,coordenadas)
VALUES ('{$_POST['id']}','{$_POST['estado']}','{$_POST['coordenadas']}')");


mysql_close($con);

}


/*
if($_POST['id_nodo']>0){
echo 'si tiene algo';
}else{

echo 'notiene nada';}
*/

  
//echo 'Numero de sensores igual a UNO'.$_POST['id_nodo'].;
  //if ($_POST['no_sensores']==1){ echo 'Numero de sensores igual a UNO'; $fallo=1;}
//  if (!$_POST['id_nodo']>0){ echo 'Campo id_nodo vacio'; $fallo=1;}
//  if (!$_POST['no_sensores']>0){ echo 'Campo id_nodo vacio'; $fallo=1;}
//  if (!$_POST['estatus']>0){ echo 'Campo id_nodo vacio'; $fallo=1;}
//  if ((!$_POST['estatus']==1) && (!$_POST['sensor1']>0)){ echo 'Se Necesita valor en campo Sensor 1'; $fallo=1;}
//if(isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['contenido']) && !empty($_POST['contenido'])) 
        // Si entramos es que todo se ha realizado correctamente
/*
        $link = mysql_connect("localhost","root","quefeo85");
        mysql_select_db("panda",$link);

        
        mysql_query("INSERT INTO descripcion (id_nodo,no_sensores,sensor1,sensor2,sensor3,sensor4,estatus)
        VALUES ('{$_POST['id_nodo']}','{$_POST['no_sensores']}','{$_POST['sensor1']}','{$_POST['sensor2']}','{$_POST['sensor3']}','{$_POST['sensor4']}','{$_POST['estatus']}')",$link);

      
        $my_error = mysql_error($link);

        if(!empty($my_error) {

            echo "Ha habido un error al insertar los valores. $my_error"; 

        } else {

            echo "Los datos han sido introducidos satisfactoriamente";

        }

    //} else {

  //      echo "Error, no ha introducido todos los datos";

    //}
*/
?>