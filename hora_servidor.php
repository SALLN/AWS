<?php
session_start();

date_default_timezone_set('America/Bogota');
$_SESSION['Hora_Servidor'] = date('Y-m-d H:i:s');

echo $_SESSION['Hora_Servidor']; 

?>

