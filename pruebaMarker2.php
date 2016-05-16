<?php
session_start();
$_SESSION['Lat']=$_GET['Latitud'];
$_SESSION['Lng']=$_GET['Longitud'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
 </head>

<body>
 <input type ="button" id="Boton_grafica" value = 'INICIAR' onclick="Iniciar();"/>
 <input type ="button" id="Boton_grafica" value ='DETENER' onclick="Detener();"/>
 <input type ="button" id="Boton_grafica" value ='PASO A PASO' onclick="Step();"/>    
<script>
      var Inter;
function Iniciar(){
$.post("pruebaMarker_new2.php",function( data ) {});    
Inter = setInterval(function(){$.post("pruebaMarker_new.php",function( data ) {})},3000);
    
    
}   
    
function Detener(){
        
clearInterval(Inter);

}
    
    function Step(){
        $.post("pruebaMarker_new.php",function( data ) {});
        
    }
    
                
</script>

</body>
</html>
