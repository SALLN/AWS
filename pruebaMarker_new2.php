<?php

session_start();
$Lat = $_SESSION['Lat'];
$Lng = $_SESSION['Lng'];

include("MySQL/ConexionMySQL.php");
	 
$rs = mysql_query("SELECT MAX(ID) AS id FROM grupoticoll");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}


$registro=mysql_query("SELECT * FROM grupoticoll WHERE ID='$id'") 
or die("Problemas en consulta: ".mysql_error()); 

$reg=mysql_fetch_array($registro);	

$peso=$reg['PESO'];	 
$pesofloat = floatval($peso);


    mysql_query("INSERT INTO grupoticoll(LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERV,PESO) VALUES ('$Lat','$Lng','2016-03-23 21:23:04','Steven','2016-03-23 21:23:04','$pesofloat')");


?>