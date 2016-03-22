<?php
//echo "el usuario es: ".$_POST['Usuario']. "El pw es: ".$_POST['Contrasena'];

include("conexionmysql_aws.php");

$conexion=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$conexion) or die ("Problema al conectar con la DB");

$consulta=mysql_query("SELECT id FROM admin WHERE user='$_POST[Usuario]' and pw='$_POST[Contrasena]'") 
or die("Problemas en consulta: ".mysql_error());

if (count(mysql_fetch_array($consulta)[id])!=0)
{
echo "OK";
}else{
    echo "NO";
}
?>
