<?php
session_start();
include("ConexionMySQL.php");

$consulta=mysql_query("SELECT ID_VEHICULO FROM $_SESSION[user] GROUP BY ID_VEHICULO") or die("Problemas en consulta: ".mysql_error());
$tabla=array();
$i=0;
while($reg=mysql_fetch_array($consulta)){  

	$tabla[$i]=$reg;
	$i++;
}

echo json_encode($tabla);
mysql_free_result($consulta);
mysql_close($conexion);

  
?>