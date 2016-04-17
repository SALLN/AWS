<?php

include("MySQL/ConexionMySQL.php");

$Fechas=$_POST['Fechas'];
$Servidores=$_POST['Servidores'];
$Retardos=$_POST['Retardos'];
$Jitters=$_POST['Jitters'];


$Fechas=split('&',$Fechas);
$Servidores=split('&',$Servidores);
$Retardos=split('&',$Retardos);
$Jitters=split('&',$Jitters);

echo "si responde";
$Longitud=count($Fechas);


for ($i = 1; $i < $Longitud ; $i++) {
    
    echo $i;
}


//$consulta=mysql_query("INSERT INTO Pings (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERV) VALUES('$_POST[Latitud_gps]','$_POST[Longitud_gps]','$_POST[Fecha_Hora_gps]','$_POST[Id_vehiculo]','$fecha_servidor')");

//mysql_free_result($consulta);
//mysql_close($conexion);

?>