<?php


include("conexionmysql_aws.php");

$usuario = $_POST['userid'];
$contrasena = $_POST['password'];

echo $usuario . "<br>";
echo $contrasena;


$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problema al conectar con la DB"); 


mysql_query("INSERT INTO admin(user,pw) VALUES ('$usuario','$contrasena')",$con);

mysql_query("CREATE TABLE $usuario(ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, LATITUD VARCHAR(20), LONGITUD VARCHAR(20), FECHA_HORA VARCHAR(20),  ID_VEHICULO VARCHAR(20) )",$con);


?>