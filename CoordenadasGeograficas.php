<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Coordenadas Ticoll</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<link rel=StyleSheet href="encabezado.css" type="text/css">
<link rel="shortcut icon" href="taxi6.ico">
</head>

<body>

<header>

<div class="cabecera">
          
          <h1 class="titulo" ALIGN=center>Geolocalización de Automóvil</h1>  </BR>

	<div id="contenedor">

		<div><h3 class="parametros">Latitud:</h3><h3 id="fila_latitud">00.00000</h3></div>

		<div><h3 class="parametros">Longitud:</h3><h3 id="fila_longitud">-00.00000</h3></div>

		<div><h3 class="parametros">Fecha:</h3><h3 id="fila_fecha">0000-00-00</h3></div>

		<div><h3 class="parametros">Hora:</h3><h3 id="fila_hora">00:00:00</h3></div>

	</div>

</div>

</header>

<div class="imagen_taxi"><IMG SRC="taxi6.jpg" WIDTH=170 HEIGHT=80></div>
<div id="googleMap"></div>
<div id="result"><?php include("ConsultaDB.php"); ?></div> 

<div class="historicoinicio">
<h3>INICIO:</h3>
<input type="date" 		 name="fecha" 		id="Fecha_Inicio" 		min="2015-07-16"/>
<input type="time" 		 name="hora" 		id="Hora_Inicio" 		step="1"/>
</div>
<div class="historicofinal">
<h3>FINAL:</h3>
<input type="date" 		 name="fecha" 		id="Fecha_Final" 		min="2015-07-16"/>
<input type="time" 		 name="hora" 		id="Hora_Final" 		step="1"/>
</div>
<div class="boton">
<input id="Boton_Historico" type="button" value="CONSULTAR HISTORICO" onclick="Consulta_Historico();" />
<input id="Boton_Real" type="button" value="CONSULTAR REAL" onclick="Consulta_Real();" />
</div>

<script>

var myCenter=new google.maps.LatLng(parseFloat(Latitud_Gps),parseFloat(Longitud_Gps));

var Marker_Real;			var Ruta_Historica = [];	var Posicion_Historica;		var Fecha_Inicio_PHP;		var Hora_Inicio_PHP;		
var Marker_Historico=[];    var Ruta_Real = [];  		var Posicion_Real;			var Fecha_Final_PHP;		var Hora_Final_PHP;			
var Latitud;				var Fecha;					var auxlat; 				var map;					var NumMark;	
var Longitud;				var Hora;					var auxlon;					var k;
var Latitudes_Historicas;	var Latitud_Historica;		var Fechas_Historicas;		var columnas;
var Longitudes_Historicas;	var Longitud_Historica;		var Horas_Historicas;		var Datos;








var PoliLinea_Real = new google.maps.Polyline({ path: Ruta_Real,   strokeColor: '#FFFF00',  strokeOpacity: 1.0,	 strokeWeight: 5	});

var PoliLinea_Historica = new google.maps.Polyline({ path: Ruta_Historica,  strokeColor: '#000000', strokeOpacity: 1.0,	strokeWeight: 5	});

var MarkerInterval = setInterval(function(){SetMarker()}, 10000);
var DbInterval =     setInterval(function(){CargarDB()}, 10000);

var mapOptions ={		center : myCenter,		zoom : 16,		mapTypeId: google.maps.MapTypeId.ROADMAP,	 disableDefaultUI: false	};

var Icono_Historico ={
					  path: google.maps.SymbolPath.CIRCLE,
					  scale: 5, //tamaño
					  strokeColor: '#000', //color del borde
					  strokeWeight: 2, //grosor del borde
					  fillColor: '#fff', //color de relleno
					  fillOpacity:1// opacidad del relleno
					}

map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

PoliLinea_Real.setMap(map);

function CargarDB(){	$('#result').load('ConsultaDB.php'); }

function SetMarker(){

	Latitud = parseFloat(Latitud_Gps);
	Longitud = parseFloat(Longitud_Gps);

	Posicion_Real=new google.maps.LatLng(Latitud,Longitud);

	if (Latitud!=auxlat || Longitud!=auxlon ){
	
	if (Marker_Real != null) {        Marker_Real.setMap(null);        }

	auxlat =Latitud;	auxlon =Longitud;

	document.getElementById('fila_latitud').innerHTML  = Latitud;		document.getElementById('fila_longitud').innerHTML = Longitud;
	document.getElementById('fila_fecha').innerHTML    = Fecha_Gps;		document.getElementById('fila_hora').innerHTML     = Hora_Gps;

	Ruta_Real.push(Posicion_Real); 
    
	PoliLinea_Real.setPath(Ruta_Real);

	Marker_Real=new google.maps.Marker({  
								position:Posicion_Real, 		
								//animation:google.maps.Animation.BOUNCE,
								map: map,
								icon: 'taxi2.png'
								//label: "999"
							 });
	/*   SEGUNDO VEHICULO
	var posicion2=new google.maps.LatLng(10.57391,-74.77929);
	marker2=new google.maps.Marker({  
									position:posicion2, 		//animation:google.maps.Animation.DROP,
									map: map,
									icon: 'taxi2.png'
								 });

	*/	
	map.setCenter(Posicion_Real);
	} // if no repetir
	} // SET MARKER

function Consulta_Real(){

	PoliLinea_Historica.setMap(null);
	for (var l = 0; l <Marker_Historico.length; l++)	{	Marker_Historico[l].setMap(null);		}

	PoliLinea_Real.setMap(map);

	MarkerInterval = setInterval(function(){SetMarker()}, 10000);
	}

function Consulta_Historico(){

	Fecha_Inicio_PHP = document.getElementById('Fecha_Inicio').value;
	Fecha_Final_PHP = document.getElementById('Fecha_Final').value;
	Hora_Inicio_PHP = document.getElementById('Hora_Inicio').value;
	Hora_Final_PHP = document.getElementById('Hora_Final').value;

	$.post( "ConsultaDbHistorico.php", { FechaInicio: Fecha_Inicio_PHP, FechaFinal: Fecha_Final_PHP, 
								   HoraInicio:  Hora_Inicio_PHP,  HoraFinal:  Hora_Final_PHP		}).done(

	function( data ) {	Decodificar(data);	 });

	}

function Decodificar(data){

	Marker_Real.setMap(null);
	PoliLinea_Real.setMap(null);
	PoliLinea_Historica.setMap(map);

	clearInterval(MarkerInterval);
	
	Datos=data;
  	columnas=data.split("&");

  	Latitudes_Historicas=columnas[0].substring(1,columnas[0].length-1).split(",");

  	for (i = 0; i <Latitudes_Historicas.length; i++)	 {	Latitudes_Historicas[i]=Latitudes_Historicas[i].substring(1,Latitudes_Historicas[i].length-1); 	}

	Longitudes_Historicas=columnas[1].substring(1,columnas[1].length-1).split(",");

	for (i = 0; i <Longitudes_Historicas.length; i++) {		Longitudes_Historicas[i]=Longitudes_Historicas[i].substring(1,Longitudes_Historicas[i].length-1);	 }

	Fechas_Historicas=columnas[2].substring(1,columnas[2].length-1).split(",");

	for (i = 0; i <Fechas_Historicas.length; i++) {		Fechas_Historicas[i]=Fechas_Historicas[i].substring(1,11);	 }
  	
  	Horas_Historicas=columnas[3].substring(1,columnas[3].length-1).split(",");

  	for (i = 0; i <Horas_Historicas.length; i++) {		Horas_Historicas[i]=Horas_Historicas[i].substring(1,9);	 }

		k=0;
		NumMark=0;
  	for(var i=0;i<Latitudes_Historicas.length;i++)
		{
			k++;

		Latitud_Historica = parseFloat(Latitudes_Historicas[i]);
		Longitud_Historica = parseFloat(Longitudes_Historicas[i]);
		Posicion_Historica=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);

		if (Latitud_Historica!=auxlat || Longitud_Historica!=auxlon ){	

		auxlat =Latitud_Historica;	auxlon =Longitud_Historica;

		Ruta_Historica.push(Posicion_Historica);   
		PoliLinea_Historica.setPath(Ruta_Historica);  

		Marker_Historico[NumMark]=new google.maps.Marker({  
									position:Posicion_Historica, 		//animation:google.maps.Animation.DROP,
									map: map,
									title: Fechas_Historicas[i]+"--"+Horas_Historicas[i],
									//animation:google.maps.Animation.BOUNCE, // SALTANDO
									//draggable: true, // PERMITE ARRASTRARLOS
									label: "1",
									icon: Icono_Historico
									//icon: 'taxi2.png'
								 });
		map.setCenter(Posicion_Historica);
		NumMark++;
		} // if no repetir
		} // FOR MARKER

			} // fin funcion decodificar

</script>

</body>
</html>