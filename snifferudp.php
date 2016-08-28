<?php

date_default_timezone_set('America/Bogota');

error_reporting(E_ALL | E_STRICT);
$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
socket_bind($socket, '172.31.21.77', 55057);

do{

socket_recvfrom($socket, $mensaje, 200, 0, $from, $port);

// >REV031911376617+1101913-0748515900235901;ID=Grupo2<
// >RTX&mensajeencapsulado&@;EV001911628664+1095488-0747963600032432;ID=357666051297791<
//$mensaje = ">RTX#55-94-149#@;EV001912019802+1095464-0747961700000032;ID=001EUQ426<";

$mensaje_div = explode('#',$mensaje);
$pesos = explode('-',$mensaje_div[1]);

$s1=strpos($mensaje,"#");    $s2=strpos($mensaje,"@");  $lon=strlen($mensaje);

if (!empty($s1) && !empty($s2) && $lon<77 && $lon>66){
include("MySQL/ConexionMySQL.php");
$lat=strpos($mensaje_div[2],"+");    $lng=strpos($mensaje_div[2],"-");
$id=strpos($mensaje_div[2],"ID=");    $time=substr($mensaje_div[2],$lat-10,10);
$weeksTosecond=substr($time,0,4)*7*24*60*60;    $daysToseconds=substr($time,4,1)*24*60*60;    $seconds=substr($time,5,5);
$tiempogps=$weeksTosecond+$daysToseconds+$seconds+315964800;
$latitud=substr($mensaje_div[2],$lat+1,2).'.'.substr($mensaje_div[2],$lat+3,5);
$longitud='-'.substr($mensaje_div[2],$lng+2,2).'.'.substr($mensaje_div[2],$lng+4,5);
$usuario=substr($mensaje_div[2],$id+3,3);
$placa=substr($mensaje_div[2],$id+6,6);
$fecha=date('Y-m-d H:i:s', $tiempogps);
$fecha_servidor = date('Y-m-d H:i:s');
$consulta=mysql_query("SELECT user FROM admin where id=$usuario") or die("Problemas en consulta: ".mysql_error());
$tabla_usuario  = mysql_fetch_array($consulta)['user'];
$consulta2=mysql_query("INSERT INTO $tabla_usuario(LATITUD,LONGITUD,FECHA_HORA,FECHA_HORA_SERVER,PLACA,PESO_1,PESO_2,PESO_TOTAL) VALUES('$latitud','$longitud','$fecha','$fecha_servidor','$placa','$pesos[0]','$pesos[1]','$pesos[2]')");
mysql_close($conexion);

}
} while (true);
?>
