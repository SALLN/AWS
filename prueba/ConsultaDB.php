<?php

include("conexionmysql.php");

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problema al conectar con la DB");

$rs = mysql_query("SELECT MAX(ID) AS id FROM coordenadas");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}

$registro=mysql_query("SELECT * FROM coordenadas WHERE ID='$id'") 
or die("Problemas en consulta: ".mysql_error());

while($reg=mysql_fetch_array($registro)){


$lati2=$reg['LATITUD'];
$longi2=$reg['LONGITUD'];
$fecha2=$reg['FECHA'];
$hora2=$reg['HORA'];
}
?>


<script type="text/javascript">

var Latitud_Gps = <?php echo json_encode($lati2); ?>;
var Longitud_Gps = <?php echo json_encode($longi2); ?>;
var Fecha_Gps = <?php echo json_encode($fecha2); ?>;
var Hora_Gps = <?php echo json_encode($hora2); ?>;


</script>
