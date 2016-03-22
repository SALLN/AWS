<?php

include("MySQL/ConexionMySQL.php");

$consulta=mysql_query("SELECT id FROM admin WHERE user='$_POST[Usuario]' and pw='$_POST[Contrasena]'") 
or die("Problemas en consulta: ".mysql_error());

if (count(mysql_fetch_array($consulta)[id])!=0)

{echo "OK";}
else{    echo "NO";}
?>
