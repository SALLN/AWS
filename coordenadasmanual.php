<?php

include("MySQL/ConexionMySQL.php");
	 date_default_timezone_set('America/Bogota');

$lat = $_POST['latitud'];
$lng = $_POST['longitud'];
$peso = $_POST['peso'];
$fecha = $_POST['fecha'];
$fecha_servidor = date('Y-m-d H:i:s');

mysql_query("INSERT INTO GrupoTicoll(LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERV,PESO) VALUES ('$lat','$lng','$fecha','Steven','$fecha_servidor','$peso')");
		


?>