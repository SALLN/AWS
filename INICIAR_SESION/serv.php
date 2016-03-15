<?php
	$conect = @mysql_connect("localhost","root","ticoll") or die("No se encontró el servidor");
	mysql_select_db("clase_php",$conect)or die("No se encontró la base de datos");
?>