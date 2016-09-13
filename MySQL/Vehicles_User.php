<?php
session_start();
include("ConexionMySQL.php");


$tabla=array();
$i=0;

if ($_POST['App']=="APP")
{
$consulta=mysqli_query($conexion,"SELECT ID_VEHICULO FROM FamiliaLlerenaNavarro GROUP BY ID_VEHICULO");
    while($reg=mysqli_fetch_array($consulta,MYSQLI_ASSOC)){

	$tabla[$i]=$reg['ID_VEHICULO'];
	$i++;
}
}
else
{
$consulta=mysqli_query($conexion,"SELECT ID_VEHICULO FROM $_SESSION[user] GROUP BY ID_VEHICULO");
    while($reg=mysqli_fetch_array($consulta,MYSQLI_ASSOC)){

	$tabla[$i]=$reg;
	$i++;
}
}



echo json_encode($tabla);

mysqli_free_result($consulta);
mysqli_close($conexion);


?>
