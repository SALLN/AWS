<?php

include("MySQL/ConexionMySQL.php");

$Peso='14';
date_default_timezone_set('America/Bogota');
$fecha_servidor = date('Y-m-d H:i:s');
$latitud='10.99999';
$longitud='-74.99999';
$fecha=$fecha_servidor;
$idv='maso';
$usuario='Peso';

error_reporting(E_ALL | E_STRICT);
//do{
$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

socket_bind($socket, '172.31.44.227', 55056);

$from = '';
$port = 55056;
//do{
socket_recvfrom($socket, $buf, 12, 0, $from, $port);
echo "Se recibió $buf desde la dirección remota $from y el puerto remoto $port" ;   


$consulta=mysql_query("INSERT INTO '$usuario' (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERVER,PESO) VALUES('$latitud','$longitud','$fecha','$idv','$fecha_servidor','$peso)");

mysql_free_result($consulta);
mysql_close($conexion);


//} while (true);
?>