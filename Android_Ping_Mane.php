<?php

include("MySQL/ConexionMySQL.php");

$Fechas=split('%',$_POST['Fechas']);
$Servidores=$_POST['Servidores'];
$Retardos=split('%',$_POST['Retardos']);
$Jitters=split('%',$_POST['Jitters']);
$Tipo=$_POST['Tipo'];
$Realizacion=$_POST['Realizacion'];
$ipOrigen=$_SERVER['REMOTE_ADDR'];

$Longitud=count($Retardos);
for ($i = 1; $i < $Longitud ; $i++) {

$consulta=mysql_query("INSERT INTO data_mane (idRealizacion,tipoPrueba,fecha,ipOrigen,ipDestino,delay,jitter) VALUES('$Realizacion','$Tipo','$Fechas[$i]','$ipOrigen','$Servidores','$Retardos[$i]','$Jitters[$i]')");
mysql_free_result($consulta);
}

mysql_close($conexion);

echo "Guardado";

?>