<?php

include("MySQL/ConexionMySQL.php");

date_default_timezone_set('America/Bogota');
$fecha_servidor = date('Y-m-d H:i:s');

$consulta=mysql_query("INSERT INTO $_POST[Usuario] (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERV,PESO_TOTAL) VALUES('$_POST[Latitud_gps]','$_POST[Longitud_gps]','$_POST[Fecha_Hora_gps]','$_POST[Id_vehiculo]','$fecha_servidor','$_POST[Peso]')");

mysql_free_result($consulta);
mysql_close($conexion);

?>
