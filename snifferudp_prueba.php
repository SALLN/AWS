<?php

include("MySQL/ConexionMySQL.php");

$consulta=mysql_query("SELECT * FROM FamiliaLlerenaNavarro WHERE ID='$_POST[idd]'") or die("Problemas en consulta: ".mysql_error());
$reg=mysql_fetch_array($consulta);

mysql_query("INSERT INTO jamesllerena (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,PESO_TOTAL,VEL)
VALUES('$reg[LATITUD]','$reg[LONGITUD]','$reg[FECHA_HORA]','EUQ426','$reg[PESO_TOTAL]','$reg[VEL]')");

mysql_free_result($consulta);
mysql_close($conexion);


 ?>
