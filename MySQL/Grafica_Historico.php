<?php
session_start();

$fecha_inicio=$_POST['Fecha_Inicio'];
$fecha_final=$_POST['Fecha_Final'];
/*
$con = mysqli_connect("localhost", "root", "ticoll", "diseno");
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
	$i=0;
    $data_points = array();
    $result = mysqli_query($con, "SELECT ID,LATITUD,LONGITUD,FECHA_HORA,PESO_TOTAL FROM $_SESSION[user] WHERE FECHA_HORA between '$fecha_inicio' and '$fecha_final' ");
    while ($row = mysqli_fetch_array($result)) {
        $i=$i+1;

      $point = array("valorx" => $i,"valory" => $row['PESO_TOTAL'],"latitud" =>$row['LATITUD'],"longitud"=>$row['LONGITUD']);
        array_push($data_points, $point);
    }
    //echo $fecha_inicio."-".$fecha_final;
    echo json_encode($data_points);
}
mysqli_close($con);*/

include("ConexionMySQL.php");

$tabla=array();
$i=0;
$data_points = array();

$consulta=mysql_query("SELECT ID,LATITUD,LONGITUD,FECHA_HORA,PESO_TOTAL FROM $_SESSION[user] WHERE FECHA_HORA between '$fecha_inicio' and '$fecha_final' ") or die("Problemas en consulta: ".mysql_error());
    while($row=mysql_fetch_array($consulta)){

      $i=$i+1;
    $point = array("valorx" => $i,"valory" => $row['PESO_TOTAL'],"latitud" =>$row['LATITUD'],"longitud"=>$row['LONGITUD']);
      array_push($data_points, $point);
}

//echo $tabla;
echo json_encode($data_points);

mysql_free_result($consulta);
mysql_close($conexion);




?>
