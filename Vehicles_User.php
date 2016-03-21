<?php
session_start();
include("conexionmysql_aws.php");

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problema al conectar con la DB");

$registro=mysql_query("SELECT ID_VEHICULO FROM $_SESSION[user] GROUP BY ID_VEHICULO") or die("Problemas en consulta: ".mysql_error());
$tabla=array();
$i=0;
while($reg=mysql_fetch_array($registro)){  

	$tabla[$i]=$reg;
	$i++;
}

echo json_encode($tabla);


  
?>