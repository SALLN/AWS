<?php

$con_aws = mysql_connect("localhost","root","ticoll") or die("problemas al conectar con mysql");
mysql_select_db("diseno",$con_aws) or die("Problemas la seleccionar con database");
$consulta=mysql_query("SELECT LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO FROM coordenadas",$con_aws);

$con_local = mysql_connect("186.82.161.239:3307","STEVEN","ticoll") or die("problemas al conectar con mysql");
mysql_select_db("diseno",$con_local) or die("Problemas la seleccionar con database");

while($tablaDB=mysql_fetch_array($consulta)){

$latitud=$tablaDB['LATITUD'];
$longitud=$tablaDB['LONGITUD'];
$fecha=$tablaDB['FECHA_HORA'];
$id_vehiculo=$tablaDB['ID_VEHICULO'];

echo $latitud;
//mysql_query("INSERT INTO coordenadas2 (LATITUD,LONGITUD,HORA,FECHA,ID_VEHICULO) 
//VALUES ('$latitud','$longitud', '$fecha','$id_vehiculo')",$con_local);

}
?>