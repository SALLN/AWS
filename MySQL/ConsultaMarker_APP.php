<?php
include("ConexionMySQL.php");

$consulta=mysqli_query($conexion,"SELECT LATITUD,LONGITUD,FECHA_HORA FROM $_POST[Usuario] where ID_VEHICULO='$_POST[Vehiculo]' ORDER BY ID DESC LIMIT 1");
$tabla=array();
$i=0;
$mensaje="";
while($reg=mysqli_fetch_array($consulta)){

	$mensaje=$mensaje.$reg['LATITUD'].",".$reg['LONGITUD'].",".$reg['FECHA_HORA'];
	$i++;
}

echo json_encode($mensaje);
mysqli_free_result($consulta);
mysqli_close($conexion);


?>
