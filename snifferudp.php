<?php
error_reporting(E_ALL | E_STRICT);
//do{
$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
do{
socket_bind($socket, '172.31.44.227', 55056);

$from = '';
$port = 55056;

socket_recvfrom($socket, $buf, 12, 0, $from, $port);
//} while (true);
echo "Se recibió $buf desde la dirección remota $from y el puerto remoto $port" ;
} while (true);
?>