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
<input type=checkbox id="Check" onclick="Checkes=!Checkes;"/>Sumar
<input id="adic" value="0"/> 
<script>
      var Inter;
    var Checkes=false;
function Iniciar(){
    
    $.post("pruebaMarker_new2.php",function( data ) {});
    Inter = setInterval(function(){$.post("pruebaMarker_new.php")},3000);

}   
    
function Detener(){clearInterval(Inter);}
    
function Step(){
    
    var valor = document.getElementById("adic").value;
    document.getElementById("adic").value  = 0;  
    $.post("pruebaMarker_new.php",{valor: valor, sumar: Checkes});

}
    
                
</script>

</body>
</html>
