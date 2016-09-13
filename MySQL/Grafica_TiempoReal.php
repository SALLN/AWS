<?php
session_start();
$fecha_hora_serv=$_SESSION['Hora_Servidor'];
include("ConexionMySQL.php");


    $data_points = array();
    $i=0;
    $consulta=mysqli_query($conexion,"SELECT LATITUD,LONGITUD,FECHA_HORA,PESO_TOTAL  FROM $_SESSION[user] WHERE FECHA_HORA between '$fecha_hora_serv' and '2017-05-19 23:59:59'");
    while ($row = mysqli_fetch_array($consulta)) {
         $i=$i+1;
        $point = array("valorx" => $i,"valory" => $row['PESO_TOTAL']);
        array_push($data_points, $point);

    }
echo json_encode($data_points);
mysqli_free_result($consulta);
mysqli_close($conexion);
?>
