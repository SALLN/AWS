<?php

include("conexionmysql_aws.php");

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problema al conectar con la DB");

$registro=mysql_query("SELECT LATITUD,LONGITUD,HORA,FECHA FROM coordenadas 
						where fecha between  '$_POST[FechaInicio]' and '$_POST[FechaFinal]' 
						and hora between '$_POST[HoraInicio]' and '$_POST[HoraFinal]' 
 						order by  id asc") or die("Problemas en consulta: ".mysql_error());


while($reg=mysql_fetch_array($registro)){  

$lati2[]=$reg['LATITUD']; 	
$longi2[]=$reg['LONGITUD'];
$fechat2[]=$reg['FECHA'];
$horat2[]=$reg['HORA'];

}

  print_r(json_encode($lati2));  echo "&";
  
  print_r(json_encode($longi2));  echo "&";

  print_r(json_encode($fechat2));  echo "&";

  print_r(json_encode($horat2));
  
?>
