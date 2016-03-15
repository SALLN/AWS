<?php

include("conexionmysql_aws.php");

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problema al conectar con la DB");

$fecha_start=$_POST['FechaInicio']." ".$_POST['HoraInicio'];
$fecha_end=$_POST['FechaFinal']." ".$_POST['HoraFinal'];

echo $fecha_start;
echo $fecha_end;

$MetrosRedonda=floatval($_POST['Metros']);
$Latitud_Marker=$_POST['LatitudMarker'];
$Longitud_Marker=$_POST['LongitudMarker'];

$registro=mysql_query("SELECT LATITUD,LONGITUD,FECHA_HORA FROM coordenadas where FECHA_HORA between  '$fecha_start' and '$fecha_end' ") or die("Problemas en consulta: ".mysql_error());


while($reg=mysql_fetch_array($registro)){ 

$Dif_Latitud=abs(floatval($Latitud_Marker)-floatval($reg['LATITUD']));
$Dif_Longitud=abs(floatval($Longitud_Marker)-floatval($reg['LONGITUD']));
$Distancia_Metros=110000*(sqrt(($Dif_Latitud*$Dif_Latitud)+($Dif_Longitud*$Dif_Longitud)));

if ($Distancia_Metros<$MetrosRedonda){

$lati2[]=$reg['LATITUD']; 	
$longi2[]=$reg['LONGITUD'];
$fechat2[]=substr($reg['FECHA_HORA'],0,10);
$horat2[]=substr($reg['FECHA_HORA'],11,18);
}
}

  print_r(json_encode($lati2));  echo "&";
  
  print_r(json_encode($longi2));  echo "&";

  print_r(json_encode($fechat2));  echo "&";

  print_r(json_encode($horat2));
  
?>