<?php
session_start();
include("conexionmysql_aws.php");

$conexion=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$conexion) or die ("Problema al conectar con la DB");

$Usuarios=$_POST['Users'];
$Marcados=$_POST['Marcas'];
$consulta=" ";
$union=" UNION ALL ";
$toco=false;
$tabla=array();

for ($i=0;$i<count($Usuarios);$i++){
    
if($Marcados[$i]=="true"){

   if($toco){       $consulta.=$union;       }

   $consulta.="(	SELECT LATITUD  FROM $_SESSION[user]    WHERE ID_VEHICULO='".$Usuarios[$i][0]."'	ORDER BY ID DESC LIMIT 1) ";
   $consulta.=$union;
   $consulta.="(	SELECT LONGITUD  FROM $_SESSION[user]    WHERE ID_VEHICULO='".$Usuarios[$i][0]."'	ORDER BY ID DESC LIMIT 1) ";
   $toco=true;
   }

}

$registro=mysql_query($consulta) or die("Problemas en consulta: ".mysql_error());
$i=0;
while($reg=mysql_fetch_array($registro)){  

	$tabla[$i]=$reg;
	$i++;
}

echo json_encode($tabla);


  
?>