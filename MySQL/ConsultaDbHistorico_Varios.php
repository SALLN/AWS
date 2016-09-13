<?php
session_start();
include("ConexionMySQL.php");

$fecha_start=$_POST['FechaInicio']." ".$_POST['HoraInicio'];
$fecha_end=$_POST['FechaFinal']." ".$_POST['HoraFinal'];

$consulta=mysqli_query($conexion,"SELECT LATITUD,LONGITUD,FECHA_HORA FROM $_SESSION[user]
						where ID_VEHICULO='$_POST[Vehiculo]' AND FECHA_HORA between  '$fecha_start' and '$fecha_end'
 						order by  ID asc");
$tabla=array();
$i=0;
while($reg=mysqli_fetch_array($consulta,MYSQLI_ASSOC)){

	$tabla[$i]=$reg;
	$i++;
}

echo json_encode($tabla);
mysqli_free_result($consulta);
mysqli_close($conexion);


?>
