<?php

$destino = "steven150924@gmail.com";
$desde = "From: " . "PHP Codigo Facilito";
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

ini_set("SMTP","aspmx.l.google.com");
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: steven150924@gmail.com" . "\r\n";

mail($destino,$asunto,$mensaje,$headers);
echo "correo enviado";

?>