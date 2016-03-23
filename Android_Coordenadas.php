<?php

include("MySQL/ConexionMySQL.php");

$consulta=mysql_query("INSERT INTO $_POST[Usuario] (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO) VALUES('$_POST[Latitud_gps]','$_POST[Longitud_gps]','$_POST[Fecha_Hora_gps]','$_POST[Id_vehiculo]')");

mysql_free_result($consulta);
mysql_close($conexion);

?>