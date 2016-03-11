<?php

include("conexionmysql_aws.php");

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problema al conectar con la DB");

$fecha_start=$_POST['FechaInicio']." ".$_POST['HoraInicio'];
$fecha_end=$_POST['FechaFinal']." ".$_POST['HoraFinal'];

$registro=mysql_query("SELECT LATITUD,LONGITUD,FECHA_HORA FROM coordenadas 
						where FECHA_HORA between  '$fecha_start' and '$fecha_end'						
 						order by  ID asc") or die("Problemas en consulta: ".mysql_error());
$tabla=array();
$i=0;
while($reg=mysql_fetch_array($registro)){  

	$tabla[$i]=$reg;
	$i++;
}

echo json_encode($tabla);


  
?>
