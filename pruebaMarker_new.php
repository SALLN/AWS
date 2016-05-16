<?php

include("MySQL/ConexionMySQL.php");
	 date_default_timezone_set('America/Bogota');

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
$valor=$_POST['valor'];
$sumar=$_POST['sumar'];
if ($sumar=="true"){
    $pesofloat = floatval($peso)+floatval($valor);
}
else{
    $pesofloat = floatval($peso)-floatval($valor);
}

$fecha_servidor = date('Y-m-d H:i:s');

mysql_query("INSERT INTO grupoticoll(LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERV,PESO) VALUES ('$latifloat2','$longifloat2','$fecha_servidor','Steven','$fecha_servidor','$pesofloat')");
		


?>