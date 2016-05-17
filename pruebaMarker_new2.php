<?php

session_start();
$Lat = $_SESSION['Lat'];
$Lng = $_SESSION['Lng'];

include("MySQL/ConexionMySQL.php");
	 date_default_timezone_set('America/Bogota');

$rs = mysql_query("SELECT MAX(ID) AS id FROM GrupoTicoll");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}


$registro=mysql_query("SELECT * FROM GrupoTicoll WHERE ID='$id'") 
or die("Problemas en consulta: ".mysql_error()); 

$reg=mysql_fetch_array($registro);	

$peso=$reg['PESO'];	 
$pesofloat = floatval($peso);

$fecha_servidor = date('Y-m-d H:i:s');

    mysql_query("INSERT INTO GrupoTicoll(LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERV,PESO) VALUES ('$Lat','$Lng','$fecha_servidor','Steven','$fecha_servidor','$pesofloat')");


?>