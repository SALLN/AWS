<?php
session_start();

$fecha_inicio=$_SESSION['fecha_ini'];
$fecha_final=$_SESSION['fecha_fi'];

$con = mysqli_connect("localhost", "root", "ticoll", "diseno");
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
	$i=0;
    $data_points = array();
    $result = mysqli_query($con, "SELECT ID,LATITUD,LONGITUD,FECHA_HORA,PESO  FROM GrupoTicoll WHERE FECHA_HORA between '$fecha_inicio' and '$fecha_final' "); 
    while ($row = mysqli_fetch_array($result)) {
        $i=$i+1;

        $point = array("valorx" => $i,"valory" => $row['PESO'],"latitud" =>$row['LATITUD'],"longitud"=>$row['LONGITUD']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points);
}
mysqli_close($con);
?>