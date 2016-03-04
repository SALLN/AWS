<?php

include("conexionmysql_aws.php");

$conexion=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$conexion) or die ("Problema al conectar con la DB");

$consulta=mysql_query("SELECT * FROM coordenadas ORDER BY ID DESC LIMIT 1") 
or die("Problemas en consulta: ".mysql_error());

while($tablaDB=mysql_fetch_array($consulta)){

$latitud=$tablaDB['LATITUD'];
$longitud=$tablaDB['LONGITUD'];
$fecha=$tablaDB['FECHA_HORA'];
								   		}
?>

<script type="text/javascript">

var Latitud_Gps = <?php echo json_encode($latitud); ?>;
var Longitud_Gps = <?php echo json_encode($longitud); ?>;
var Fecha_Gps = <?php echo json_encode($fecha); ?>;

</script>