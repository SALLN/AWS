<?php
session_start();

$fecha_inicio=$_POST['Fecha_Inicio'];
$fecha_final=$_POST['Fecha_Final'];


include("ConexionMySQL.php");

$tabla=array();
$i=0;
$data_points = array();

$consulta=mysqli_query($conexion,"SELECT ID,LATITUD,LONGITUD,FECHA_HORA,PESO_TOTAL FROM $_SESSION[user] WHERE FECHA_HORA between '$fecha_inicio' and '$fecha_final' ");
    while($row=mysqli_fetch_array($consulta)){

      $i=$i+1;
    $point = array("valorx" => $i,"valory" => $row['PESO_TOTAL'],"latitud" =>$row['LATITUD'],"longitud"=>$row['LONGITUD']);
      array_push($data_points, $point);
}

//echo $tabla;
echo json_encode($data_points);

mysqli_free_result($consulta);
mysqli_close($conexion);




?>
