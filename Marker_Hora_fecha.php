<?php

include("conexionmysql_aws.php");

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problema al conectar con la DB");

$fecha_start=$_POST['FechaInicio']." ".$_POST['HoraInicio'];
$fecha_end=$_POST['FechaFinal']." ".$_POST['HoraFinal'];

$MetrosRedonda=floatval($_POST['Metros']);
$Latitud_Marker=$_POST['LatitudMarker'];
$Longitud_Marker=$_POST['LongitudMarker'];


$registro=mysql_query("SELECT LATITUD,LONGITUD,FECHA_HORA FROM coordenadas where FECHA_HORA between  '$fecha_start' and '$fecha_end' ") or die("Problemas en consulta: ".mysql_error());

$tabla=array();
$i=0;
while($reg=mysql_fetch_array($registro)){ 

$Dif_Latitud=abs(floatval($Latitud_Marker)-floatval($reg['LATITUD']));
$Dif_Longitud=abs(floatval($Longitud_Marker)-floatval($reg['LONGITUD']));
$Distancia_Metros=110000*(sqrt(($Dif_Latitud*$Dif_Latitud)+($Dif_Longitud*$Dif_Longitud)));

if ($Distancia_Metros<$MetrosRedonda){

$tabla[$i]=$reg;
$i++;
}
}

echo json_encode($tabla);
  
?>