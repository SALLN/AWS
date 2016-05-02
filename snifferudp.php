<?php

include("MySQL/ConexionMySQL.php");

date_default_timezone_set('America/Bogota');

$Peso='14';
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
socket_recvfrom($socket, $buf, 200, 0, $from, $port);
$datos=$buf;
echo "Se recibió $buf desde la dirección remota $from y el puerto remoto $port" ;
    $s1=strpos($datos,"&");    $s2=strpos($datos,"#");    $tim=strpos($datos,"+");    $latlon=strpos($datos,"-");
    $i=strpos($datos,"ID=");    $j=strpos($datos,"_");    $k=strpos($datos,"<"); $time=substr($datos,$tim-10,10);  
    $weeksTosecond=substr($time,0,4)*7*24*60*60;    $daysToseconds=substr($time,4,1)*24*60*60;    $seconds=substr($time,5,5);
    $tiempogps=$weeksTosecond+$daysToseconds+$seconds+315964800; 

    $latitud=substr($datos,$tim+1,2).'.'.substr($datos,$tim+3,5);
    $longitud='-'.substr($datos,$latlon+2,2).'.'.substr($datos,$latlon+4,5);
    $usuario=substr($datos,$i+3,$j-$i-3);
    $idv=substr($datos,$j+1,$k-$j-1);
    $peso=substr($datos,$s1+1,$s2-$s1-1);
    $fecha=date('Y-m-d H:i:s', $tiempogps);

    echo $fecha;   


$consulta=mysql_query("INSERT INTO $usuario (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERVER,PESO) VALUES('$latitud','$longitud','$fecha','$idv','$fecha_servidor','$peso)");

mysql_close($conexion);


//} while (true);
?>