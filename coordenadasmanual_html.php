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
 <input type ="button" id="Boton_grafica" value = 'INGRESAR' onclick="Iniciar();"/>

<script>
    
    var latitud=[];
    var longitud=[];
    var fecha=[];
    var peso=[];
    
latitud.push("10.954640533655928");     longitud.push("-74.79642927646775");        fecha.push("2016-05-27 08:32:24");       peso.push("0");
latitud.push("10.954640533655878");     longitud.push("-74.79642927646645");        fecha.push("2016-05-30 16:30:03");       peso.push("0.7");  
latitud.push("10.954640533655889");     longitud.push("-74.79642927646631");        fecha.push("2016-05-30 16:30:06");       peso.push("13.2");    latitud.push("10.954640533655882");     longitud.push("-74.79642927646637");        fecha.push("2016-05-30 16:30:09");       peso.push("24.3");  
latitud.push("10.954640533655889");     longitud.push("-74.79642927646628");        fecha.push("2016-05-30 16:30:12");       peso.push("39.1");  
latitud.push("10.954640533655890");     longitud.push("-74.79642927646639");        fecha.push("2016-05-30 16:30:15");       peso.push("48.5");  
latitud.push("10.954640533655887");     longitud.push("-74.79642927646637");        fecha.push("2016-05-30 16:30:18");       peso.push("51.5"); 
    
latitud.push("10.955059233406146");     longitud.push("-74.79624420404434");        fecha.push("2016-05-30 16:30:21");       peso.push("49.2");
latitud.push("10.955512165802462");     longitud.push("-74.79605913162231");        fecha.push("2016-05-30 16:30:24");       peso.push("51.4");    
latitud.push("10.955446332648375");     longitud.push("-74.79566216468811");        fecha.push("2016-05-30 16:30:27");       peso.push("50.2");
latitud.push("10.955290966346663");     longitud.push("-74.79532152414322");        fecha.push("2016-05-30 16:30:30");       peso.push("49.2");    
latitud.push("10.954880166918782");     longitud.push("-74.79550927877426");        fecha.push("2016-05-30 16:30:33");       peso.push("50.8");
 latitud.push("10.954424600219872");     longitud.push("-74.7956970334053");        fecha.push("2016-05-30 16:30:36");       peso.push("48.5");    
latitud.push("10.954132299829958");     longitud.push("-74.79584187269211");        fecha.push("2016-05-30 16:30:39");       peso.push("51.7");    
  latitud.push("10.953982199517556");     longitud.push("-74.796002805233");        fecha.push("2016-05-30 16:30:42");       peso.push("51.2");    
 latitud.push("10.95420866662634");     longitud.push("-74.79647219181061");        fecha.push("2016-05-30 16:30:45");       peso.push("52.4");    
 latitud.push("10.954445666903489");     longitud.push("-74.7969925403595");        fecha.push("2016-05-30 16:30:48");       peso.push("50.1");    
latitud.push("10.954598400314886");     longitud.push("-74.79736536741257");        fecha.push("2016-05-30 16:30:51");       peso.push("50.9");    
 latitud.push("10.954350866815401");     longitud.push("-74.7975155711174");        fecha.push("2016-05-30 16:30:54");       peso.push("51.3");    
latitud.push("10.954013799589662");     longitud.push("-74.79762017726898");        fecha.push("2016-05-30 16:30:57");       peso.push("52.4");    
latitud.push("10.953879499259964");     longitud.push("-74.79726076126099");        fecha.push("2016-05-30 16:31:00");       peso.push("51.5");    
latitud.push("10.953737298844471");     longitud.push("-74.79704350233078");        fecha.push("2016-05-30 16:31:03");       peso.push("51.5");    
latitud.push("10.953294897115041");     longitud.push("-74.79726612567902");        fecha.push("2016-05-30 16:31:06");       peso.push("51.5");    
latitud.push("10.952852494724503");     longitud.push("-74.79749143123627");        fecha.push("2016-05-30 16:31:09");       peso.push("51.5");    
latitud.push("10.952439058559579");     longitud.push("-74.79789644479752");        fecha.push("2016-05-30 16:31:12");       peso.push("51.5");    
latitud.push("10.951962421245362");     longitud.push("-74.79851335287094");        fecha.push("2016-05-30 16:31:15");       peso.push("51.5");    
latitud.push("10.951525283586518");     longitud.push("-74.79903370141983");        fecha.push("2016-05-30 16:31:18");       peso.push("51.5");    
latitud.push("10.951019677778596");     longitud.push("-74.79952454566956");        fecha.push("2016-05-30 16:31:21");       peso.push("51.5");    
latitud.push("10.950579905358254");     longitud.push("-74.79979544878006");        fecha.push("2016-05-30 16:31:24");       peso.push("51.5");    
 latitud.push("10.95005059756708");     longitud.push("-74.79993760585785");        fecha.push("2016-05-30 16:31:27");       peso.push("51.5");    
latitud.push("10.949415953644866");     longitud.push("-74.79995369911194");        fecha.push("2016-05-30 16:31:30");       peso.push("51.5");    
latitud.push("10.948905077466353");     longitud.push("-74.79995369911194");        fecha.push("2016-05-30 16:31:33");       peso.push("51.5");    
 latitud.push("10.94843370124164");     longitud.push("-74.79992419481277");        fecha.push("2016-05-30 16:31:36");       peso.push("51.5");    
latitud.push("10.947917556582057");     longitud.push("-74.79991614818573");        fecha.push("2016-05-30 16:31:39");       peso.push("51.5");    
latitud.push("10.947796420460213");     longitud.push("-74.80013608932495");        fecha.push("2016-05-30 16:31:42");       peso.push("51.5");    
latitud.push("10.947812220826732");     longitud.push("-74.80064570903778");        fecha.push("2016-05-30 16:31:45");       peso.push("51.5");    
latitud.push("10.947817487615392");     longitud.push("-74.80124920606613");        fecha.push("2016-05-30 16:31:48");       peso.push("51.5");    
 latitud.push("10.947799053854682");     longitud.push("-74.8017829656601");        fecha.push("2016-05-30 16:31:51");       peso.push("51.5");    
latitud.push("10.947801687249141");     longitud.push("-74.80223089456558");        fecha.push("2016-05-30 16:31:54");       peso.push("51.5");    
latitud.push("10.947801687249141");     longitud.push("-74.80282098054886");        fecha.push("2016-05-30 16:31:57");       peso.push("51.5");    
latitud.push("10.947788520276635");     longitud.push("-74.80333864688873");        fecha.push("2016-05-30 16:32:00");       peso.push("51.5");    
 latitud.push("10.947801687249141");     longitud.push("-74.8036578297615");        fecha.push("2016-05-30 16:32:03");       peso.push("51.5");    

   var contador=0;

    
    function Iniciar(){

        
    $.post("coordenadasmanual.php",{latitud: latitud[contador], longitud: longitud[contador], peso: peso[contador], fecha: fecha[contador]});
        contador++;

}   
    
                
</script>

</body>
</html>
