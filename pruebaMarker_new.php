<?php

include("MySQL/ConexionMySQL.php");
	 
$rs = mysql_query("SELECT MAX(ID) AS id FROM grupoticoll");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}


$registro=mysql_query("SELECT * FROM grupoticoll WHERE ID='$id'") 
or die("Problemas en consulta: ".mysql_error()); 

$reg=mysql_fetch_array($registro);	
 
$lati2=$reg['LATITUD'];
$latifloat2 = floatval($lati2)-0.0001;

$longi2=$reg['LONGITUD'];	 
$longifloat2 = floatval($longi2)+0.0001;

$peso=$reg['PESO'];	 
$pesofloat = floatval($peso)+0;


mysql_query("INSERT INTO grupoticoll(LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERV,PESO) VALUES ('$latifloat2','$longifloat2','2016-03-23 21:23:04','Steven','2016-03-23 21:23:04','$pesofloat')");
		


?>