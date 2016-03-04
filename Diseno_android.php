<?php

include("conexionmysql_aws.php");

   $con = mysql_connect($host,$user,$pw) or die("problemas al conectar con mysql");
   mysql_select_db($db,$con) or die("Problemas la seleccionar con database");
   mysql_query("INSERT INTO coordenadas (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO) 
   VALUES ('$_POST[Latitud_gps]','$_POST[Longitud_gps]','$_POST[Fecha_Hora_gps]','$_POST[Id_vehiculo]')",$con);

?>