<?php


   $con = mysql_connect("186.82.161.239:3307","root","ticoll") or die("problemas al conectar con mysql");
   mysql_select_db("diseno",$con) or die("Problemas la seleccionar con database");
   mysql_query("INSERT INTO coordenadas2 (LATITUD,LONGITUD,HORA,FECHA,ID_VEHICULO) 
   VALUES ('10.99999','-74.99999', '06:05:04','2016-03-02','Syrus')",$con);

?>