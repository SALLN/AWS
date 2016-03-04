<?php

include("conexionmysql_aws.php");

   $con = mysql_connect($host,$user,$pw) or die("problemas al conectar con mysql");
   mysql_select_db($db,$con) or die("Problemas la seleccionar con database");
   mysql_query("INSERT INTO coordenadas (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO) 
   VALUES ('10.12345','-74.12345','2016-03-02 06:05:04','Syrus')",$con);

?>