<?php
	$conect = @mysql_connect("localhost","root","ticoll") or die("No se encontró el servidor");
	mysql_select_db("diseno",$conect)or die("No se encontró la base de datos");
?>