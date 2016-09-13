<?php
session_start();
include("ConexionMySQL.php");

$Latitud_Marker=$_POST['LatitudMarker'];
$Longitud_Marker=$_POST['LongitudMarker'];
$MetrosRedonda=floatval($_POST['Metros']);
$consulta=mysqli_query($conexion,"SELECT LATITUD,LONGITUD,FECHA_HORA,PESO_TOTAL FROM $_SESSION[user] where ID_VEHICULO='$_POST[Vehiculo]'");

$tabla=array();
$i=0;
while($reg=mysqli_fetch_array($consulta)){

$Dif_Latitud=abs(floatval($Latitud_Marker)-floatval($reg['LATITUD']));
$Dif_Longitud=abs(floatval($Longitud_Marker)-floatval($reg['LONGITUD']));
$Distancia_Metros=110000*(sqrt(($Dif_Latitud*$Dif_Latitud)+($Dif_Longitud*$Dif_Longitud)));

if ($Distancia_Metros<$MetrosRedonda){

$tabla[$i]=$reg;
$i++;
}
}

echo json_encode($tabla);
mysqli_free_result($consulta);
mysqli_close($conexion);

?>
