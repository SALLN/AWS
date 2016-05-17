<?php
session_start();
$fecha_hora_serv=$_SESSION['Hora_Servidor'];

$con = mysqli_connect("localhost", "root", "ticoll", "diseno");
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();
    $i=0;
    $result = mysqli_query($con, "SELECT LATITUD,LONGITUD,FECHA_HORA,PESO  FROM GrupoTicoll WHERE FECHA_HORA between '$fecha_hora_serv' and '2017-05-19 23:59:59'"); 
    while ($row = mysqli_fetch_array($result)) {
         $i=$i+1;
        $point = array("valorx" => $i,"valory" => $row['PESO']);
        array_push($data_points, $point);
       
    }
    echo json_encode($data_points);
}
mysqli_close($con);
?>