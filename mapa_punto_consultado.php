<?php
$latitud = $_POST['latit'];
$longitud= $_POST['longit'];

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Geolocation Dinámico</title>
<script src="http://maps.googleapis.com/maps/api/js?v3">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


</head>

<body>

<h1>Ubicación del peso seleccionado</h1>	
<a href="grafica_historico.html">Click aqui para consultar otro punto</a>

<div id="mapa" style="width:1050px; height:490px;">

</div>
       <h4 id="la"></h4>
       <h4 id="lo"></h4>



<script>





var divMapa=document.getElementById("mapa");
navigator.geolocation.getCurrentPosition(fn_ok,fn_mal);
function fn_mal(){};

function fn_ok(rta){
	
	
var lat="<?php echo $latitud?>";
var lon="<?php echo $longitud?>";

document.getElementById("la").innerHTML="Latitud: "+lat;
document.getElementById("lo").innerHTML="Longitud: "+lon;

var glatLon=new google.maps.LatLng(lat,lon);



var objConfig={
zoom: 13,
center: glatLon	
	
}

var gMapa=new google.maps.Map(divMapa,objConfig);



var Information={
content: '<div style="height:150px;width:300px"><h2>Esta es la ubicación del peso correspondiente!</h2></div>'	
	
}

var ObjConfigMarker={
	
	position: glatLon,
	animation:google.maps.Animation.DROP,
	draggable: true,
	map: gMapa,
	title: "Aquí fué"
	
}


var gMarker=new google.maps.Marker(ObjConfigMarker);
    //gMarker.setIcon('icono.png');
	var gIW= new google.maps.InfoWindow(Information);
	google.maps.event.addListener(gMarker,'click',function(){gIW.open(gMapa,gMarker)});
	
}





</script>

</body>
</html>

