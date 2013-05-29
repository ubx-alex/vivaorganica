    <?php
$conexion = mysql_connect('localhost', 'root', 'quefeo85'); // se conecta con el servidor

mysql_select_db('panda', $conexion); // selecciona la base de datos

$tabla = mysql_query("SELECT id_nodo FROM descripcion ORDER BY id_nodo ASC"); // selecciono todos los registros de la tabla usuarios, ordenado por nombre

while ($registro = mysql_fetch_array($tabla)) { // comienza un bucle que leera todos los registros y ejecutara las ordenes que siguen

    echo 'Numero del Usuario: ' . $registro['id_nodo'] . ' '; // imprime el texto, el valor del numero del campo id y hace un salto de línea

    } // fin del bucle de ordenes

mysql_free_result($tabla); // libera los registros de la tabla

mysql_close($conexion); // cierra la conexion con la base de datos

?>
