<?php

include("MySQL/ConexionMySQL.php");

$Fechas=split('&',$_POST['Fechas']);
$Servidores=split('&',$_POST['Servidores']);
$Retardos=split('&',$_POST['Retardos']);
$Jitters=split('&',$_POST['Jitters']);

for ($i = 1; $i < $Longitud ; $i++) {

$consulta=mysql_query("INSERT INTO ping (DELAY,JITTER,SERVER,DATETIME) VALUES('$Retardos[$i]','$Jitters[$i]','$Servidores[$i]','$Fechas[$i]')");
mysql_free_result($consulta);
}

mysql_close($conexion);
echo "Guardado Satisfactoriamente";

?>