<?php
session_start();
include 'INICIAR_SESION/serv.php';
if(!isset($_SESSION['user'])) {   echo '<script> window.location="inicio_sesion.php"; </script>';   }
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <title>Ticoll</title>
    <link rel="shortcut icon" href="images/taxi6.ico">
        
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" media="screen" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" href="css/jquery-ui-1.10.0.custom.min.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.ui.timepicker.css?v=0.3.3" type="text/css" />	
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="styleSheet" href="css/encabezado.css">
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDULHVVSQ-vjy1ScgiJU0hPuKb-IRt6bmw&libraries=drawing,places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery-countTo.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/eye.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/layout.js?ver=1.0.2"></script>
    <script src="js/jquery.ui.core.min.js"></script>
    <script src="js/jquery.ui.timepicker.js?v=0.3.3"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    			
</head>
	
<body>

<header id="navigation" class="navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->
                <!-- logo -->
                <h1 class="navbar-brand">
                    <a href="#body">
                        <img src="images/iconoprueba.png" alt="Kasper Logo">
                    </a>
                </h1>
                <!-- /logo -->
            </div>
                <!-- main nav -->
                <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#home">Inicio</a></li>
                        <li><a href="#Historico_Boton">Histórico</a></li>
                        <li><a href="#service">Mapa</a></li>
                        <li><a href="#contact">Contacto</a></li>
                        <li><a href="INICIAR_SESION/logout.php">Salir</a><li>

                    </ul>
                </nav>
                <!-- /main nav -->
        </div>
</header>

<section id="home">
    
    <div id="home-carousel" class="carousel slide" data-interval="false">
        <ol class="carousel-indicators">
        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home-carousel" data-slide-to="1"></li>
        <li data-target="#home-carousel" data-slide-to="2"></li>
        </ol>

    <div class="carousel-inner">

        <div class="item active"  style="background-image: url('images/bg1.jpeg')" >
        <div class="carousel-caption">
        <div class="animated bounceInRight">
        <h2>Hola Mundo! <br>Somos ticoll</h2>
        <p>¿Quieres ver el recorrido de tu vehículo en tiempo real?</p>
        </div>
        </div>
        </div>              

        <div class="item" style="background-image: url('images/bg21.jpg')">                
        <div class="carousel-caption">
        <div class="animated bounceInDown">
        <h2>Hola Mundo! <br>Somos ticoll</h2>
        <p>¿Deseas conocer tu recorrido histórico? </p>
        </div>
        </div>
        </div>

        <div class="item" style="background-image: url('images/bg3.jpg')">                 
        <div class="carousel-caption">
        <div class="animated bounceInUp">
        <h2>Hola Mundo! <br>Somos ticoll</h2>
        <p>...Y somos la solución!!!</p>
        </div>
        </div>
        </div>

    </div>

        <!--/.carousel-inner-->
        <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
        <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
        <i class="fa fa-angle-left fa-3x"></i>
        </a>
        <a class="sl-next" href="#home-carousel" data-slide="next">
        <i class="fa fa-angle-right fa-3x"></i>
        </a>
        </nav>

    </div>
</section>
           
<section id="Historico_Boton">
              
<div class="container">

    <div class="mobile-device">
    <img data-wow-delay="0.2s" class="img-responsive black  wow fadeInLeftBig" src="images/map.png" alt="iPhone Black">
    <img data-wow-delay="0.5s" class="img-responsive white  wow fadeInLeftBig" src="images/streed.png" alt="iPhone White">
    </div>

    <div class="service-features wow fadeInRight"><h3>Conoce tu recorrido y ubicación histórica</h3><ul>

<ul>
    <li>
    <h5>FECHA INICIAL:</h5><h5 class="eso" id="Fecha_Inicio2" onmouseover="Calendario_Inicial();">0000-00-00</h5>
    <div id="Fecha_Inicio" onmouseleave="Ocultar_Calendario1();" style="margin-left: 120px; margin-top: 3px; position: absolute;"></div>
    </li>

    <li>
    <h5 >FECHA FINAL:</h5><h5 class="eso" id="Fecha_Final2" onmouseover="Calendario_Final();">0000-00-00</h5>
    <div id="Fecha_Final" onmouseleave="Ocultar_Calendario2();" style="margin-left: 150px; margin-top: 3px; position: absolute;"> </div>
    </li>  
    <li>

    <li> 
    <h5>HORA INICIAL :</h5>
    <input type="text" style="width: 48px;  text-align:center; background-color: #0f748f; border:none" id="Tiempo_Hora1" value="12 AM">
    <h5>:</h5>
    <input type="text" style="width: 27px;  text-align:center; background-color: #0f748f; border:none" id="Tiempo_Minuto1" value="21">
    </li>

    <li>
    <h5>HORA FINAL :</h5>
    <input type="text" style="width: 48px;  text-align:center; background-color: #0f748f; border:none " id="Tiempo_Hora2" value="12 AM">
    <h5>:</h5>
    <input type="text" style="width: 27px;  text-align:center; background-color: #0f748f; border:none" id="Tiempo_Minuto2" value="25">
    </li>

</ul>
    </BR>

    <input class="btn btn-blue" id="Boton_Real23" type="button" value="CONSULTAR HISTORICO" onclick="Consulta_Hora_Marker();"/>

     </BR></BR>

    <input type="button" class="btn btn-blue" value="Ubicar Marker" onclick="Consulta_Marker_Hora()">
    <input type="text" id="Metros" placeholder="Digite los metros a la redonda">


    
    <div style="margin-top:15px"> 
    <input type="checkbox" id="markerfecha2"  onclick="Snap=!Snap;">
    <h3 id="Pulsalo">Snap</h3> 
    
    <h3 id="Pulsalo2" class="eso1">Combinar</h3>
    <input type="checkbox" id="markerfecha" onclick="Unido=!Unido;">
    </div>


</div>


<script>	$(document).ready(function() {

    	$('#Tiempo_Hora1').timepicker({
            showMinutes: false,
            showPeriod: true,
            showLeadingZero: false,
            hourText: 'Horas',
            rows: 4,
            onClose: function() {
            }
    	});

   	 	$('#Tiempo_Minuto1').timepicker({
            showHours: false,
            minutes: { interval: 1 },
            rows: 6,
            minuteText: 'Minutos',
            onClose: function() {
            }
    	});

            	
    	$('#Tiempo_Hora2').timepicker({
            showMinutes: false,
            showPeriod: true,
            showLeadingZero: false,
            hourText: 'Horas',
            rows: 4,
            onClose: function() {
            }
    	});
		
    	$('#Tiempo_Minuto2').timepicker({
            showHours: false,
            minutes: { interval: 1 },
            rows: 6,
            minuteText: 'Minutos',
            onClose: function() {
            }
    	});

 	});   </script>

</section>      <!------------#service-bottom------------------>

<section id="service"> <!--#Mapa-->

<div class="container">
    <div class="row">

        <div class="col-md-3 col-sm-10 wow fadeInLeft">
            <div class="media">
                <a href="#" class="pull-left">
                    <img src="images/longi.jpg" class="media-object" alt="Monitor">
                </a>
                <div class="media-body">
                    <h3>Latitud</h3>
                    <p id="fila_latitud">00.00000</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-10 wow fadeInRight" data-wow-delay="0.2s">
            <div class="media">
                <a href="#" class="pull-left">
                    <img src="images/longi.jpg" alt="Cog">
                </a>
                <div class="media-body">
                    <h3>Longitud</h3>
                    <p id="fila_longitud">-00.00000</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-10 wow fadeInLeft">
            <div class="media">
                <a href="#" class="pull-left">
                    <img src="images/fecha.jpg" alt="Ruler">
                </a>
                <div class="media-body">
                    <h3>Fecha</h3>
                    <p id="fila_fecha">0000-00-00</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-10 wow fadeInRight" data-wow-delay="0.2s">
            <div class="media">
                <a href="#" class="pull-left">
                    <img src="images/hora.png" alt="Camera">
                </a>
                <div class="media-body">
                    <h3>Hora</h3>
                    <p id="fila_hora">00:00:00</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="result"><?php include("ConsultaDB.php"); ?></div> 
<div id="googleMap"></div>
<div class="btn btn-blue" id="Boton_Real24" type="button" value="TIEMPO REAL" onclick="Consulta_Real();">
<h3 style="position: absolute; margin-left: -30px; font-size: 12px;  text-align: center;  "><strong>TIEMPO REAL</strong></h3></div>
<p class="auto"><input type="text" id="autoc"/></p>

</section>

<section id="contact"> <!--#contact-->
        
    <div class="container">

    <div class="row">

    <div class="section-title text-center wow fadeInDown">
    <h2>Contáctanos</h2>
    <p>Envia tu mensaje con tus requerimientos</p>
    </div>
    
    <div class="col-md-8 col-sm-8 wow fadeInLeft">
    <div class="contact-form clearfix">
    <form action="index.html" method="post">
    <div class="input-field">
    <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
    </div>
    <div class="input-field">
    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
    </div>
    <div class="input-field message">
    <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
    </div>
    <input type="submit" class="btn btn-blue pull-right" value="Enviar" id="msg-submit">
    </form>
    </div> <!-- end .contact-form -->
    </div> <!-- .col-md-8 -->

    <div class="col-md-4 col-sm-3 wow fadeInRight">
    <div class="contact-details">
    <span>Llámanos!</span>
    <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
    </div> <!-- end .contact-details -->
    <div class="contact-details">
    <span>Llámanos!</span>
    <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
    </div> <!-- end .contact-details -->
    </div> <!-- .col-md-4 -->

    </div>
    </div>
</section>

<footer id="footer" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="footer-logo wow fadeInDown">
                    <img src="images/iconoprueba.png" alt="logo">
                </div>

            </div>
        </div>
    </div>
</footer>

<script>

var Marker_Real;            var Ruta_Historica = [];    var Posicion_Historica;     var Fecha_Inicio_PHP;       var Hora_Inicio_PHP;        
var Marker_Marker_Hora=[];  var Ruta_Real = [];         var Posicion_Real;          var Fecha_Final_PHP;        var Hora_Final_PHP;         
var Marker_Hora_Marker=[];  var vect;                   var Metros_Redonda;         var Tabla;                  var latlng;
var Latitud;                var Fecha;                  var auxlat;                 var map;                    var NumMark;    
var Longitud;               var Hora;                   var auxlon;                 var i;                      var Datos;
var Latitudes_Historicas;   var Latitud_Historica;      var Fechas_Historicas;      var columnas;               var RealAgain=0;
var Longitudes_Historicas;  var Longitud_Historica;     var Horas_Historicas;       var Tiempo;	                var CalSet=0;
var Calendario1=1;          var LatitudMarker_Hora;     var Snap=false;             var drawingManager;         var Ruta_Snap = [];       
var Calendario2=1;	        var LongitudMarker_Hora;    var Unido=false;            var NumMarkerSnap=0;        var Ruta_Snap_Aux = [];
var Tabla_Residuo;          var cont=0;                 var Ent=0;                  var Res;                    var t=0;      
var Tabla_Entero;           var p=0;
var Tabla_Long;             var Marker_Snap=[];
    
var apiKey = 'AIzaSyCF6NfbnvzeseQoQPP5Bh6iSHA3_fcHu1g';
    
var PoliLinea_Historica = new google.maps.Polyline({ path: Ruta_Historica,  strokeColor: '#000000', strokeOpacity: 1.0, strokeWeight: 5 });

var PoliLinea_Real = new google.maps.Polyline({ path: Ruta_Real,   strokeColor: '#FFFF00',  strokeOpacity: 1.0,  strokeWeight: 5    });

var PoliLinea_Snap = new google.maps.Polyline({    path: Ruta_Snap,    strokeColor: 'black',    strokeWeight: 3   });

var MarkerInterval = setInterval(function(){SetMarker()}, 1000);

var myCenter=new google.maps.LatLng(parseFloat(Latitud_Gps),parseFloat(Longitud_Gps));

var mapOptions ={       center : myCenter,      zoom : 16,      mapTypeId: google.maps.MapTypeId.ROADMAP,    disableDefaultUI: false    };

var Icono_Historico ={
                      path: google.maps.SymbolPath.CIRCLE,
                      scale: 5, //tamaño
                      strokeColor: '#000000', //color del borde
                      strokeWeight: 2, //grosor del borde
                      fillColor: '#FF0000', //color de relleno
                      fillOpacity:1// opacidad del relleno
                      }

map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('autoc'));

map.controls[google.maps.ControlPosition.TOP_CENTER].push( document.getElementById('Boton_Real24'));

var autocomplete = new google.maps.places.Autocomplete(    document.getElementById('autoc'));
autocomplete.bindTo('bounds', map);
autocomplete.addListener('place_changed', function() {
var place = autocomplete.getPlace();
if (place.geometry.viewport) {      map.fitBounds(place.geometry.viewport);    } 
else {       map.setCenter(place.geometry.location);       map.setZoom(17);    }
});

PoliLinea_Real.setMap(map);

function SetMarker(){

    $('#result').load('ConsultaDB.php');
    Latitud = parseFloat(Latitud_Gps);
    Longitud = parseFloat(Longitud_Gps);

    Posicion_Real=new google.maps.LatLng(Latitud,Longitud);

    if (Latitud!=auxlat || Longitud!=auxlon || RealAgain==0 ){
    
    RealAgain=1;
    if (Marker_Real != null) {        Marker_Real.setMap(null);        }

    auxlat =Latitud;    auxlon =Longitud;

    Hora_Gps=Fecha_Gps.substring(11,19);
    Fecha_Gps=Fecha_Gps.substring(0,10);
    document.getElementById('fila_latitud').innerHTML  = Latitud;       document.getElementById('fila_longitud').innerHTML = Longitud;
    document.getElementById('fila_fecha').innerHTML    = Fecha_Gps;     document.getElementById('fila_hora').innerHTML     = Hora_Gps;

    Ruta_Real.push(Posicion_Real); 
    
    PoliLinea_Real.setPath(Ruta_Real);

    Marker_Real=new google.maps.Marker({  
                                position:Posicion_Real,         
                                //animation:google.maps.Animation.BOUNCE,
                                map: map,
                                icon: 'images/taxi2.png'
                                //label: "999"
                             });
    /*   SEGUNDO VEHICULO
    var posicion2=new google.maps.LatLng(10.57391,-74.77929);
    marker2=new google.maps.Marker({  
                                    position:posicion2,         //animation:google.maps.Animation.DROP,
                                    map: map,
                                    icon: 'taxi2.png'
                                 });

    */  
    map.setCenter(Posicion_Real);
    } // if no repetir

 } // SET MARKER

function Consulta_Real(){
    
    LimpiarMapa();
    PoliLinea_Real.setMap(map);
    RealAgain=0;
    MarkerInterval = setInterval(function(){SetMarker()}, 1000);
    document.location.href='#service';
}

function Consulta_Marker_Hora(){

    LimpiarMapa();
    clearInterval(MarkerInterval);
    document.location.href='#service';

    map.addListener('click', function(e) {

    LatitudMarker_Hora=e.latLng.lat();
    LongitudMarker_Hora=e.latLng.lng();
    Metros_Redonda=document.getElementById('Metros').value;

    map.setCenter(new google.maps.LatLng(parseFloat(LatitudMarker_Hora),parseFloat(LongitudMarker_Hora)));

    google.maps.event.clearListeners(map, 'click');
        
        if(Unido){
            
            ObtenerDateTime();
            
            $.post("Marker_Hora_fecha.php", {FechaFinal: Fecha_Final_PHP, FechaInicio: Fecha_Inicio_PHP,HoraInicio: Hora_Inicio_PHP,  HoraFinal: Hora_Final_PHP , LatitudMarker: LatitudMarker_Hora, LongitudMarker: LongitudMarker_Hora, Metros:  Metros_Redonda   }).done(
                
                function( data ) {  

     Tabla = JSON.parse(data);
            
        NumMark=0;
     for(i in Tabla)
        {

        Latitud_Historica = parseFloat(Tabla[i].LATITUD);
        Longitud_Historica = parseFloat(Tabla[i].LONGITUD);
        Posicion_Historica=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);

        if (Latitud_Historica!=auxlat || Longitud_Historica!=auxlon ){  

        auxlat =Latitud_Historica;  auxlon =Longitud_Historica;

        Marker_Marker_Hora[NumMark]=new google.maps.Marker({  
                                    position:Posicion_Historica,        //animation:google.maps.Animation.DROP,
                                    map: map,
                                    title: Tabla[i].FECHA_HORA,
                                    //animation:google.maps.Animation.BOUNCE, // SALTANDO
                                    //draggable: true, // PERMITE ARRASTRARLOS
                                    label: "1",
                                    icon: Icono_Historico
                                    //icon: 'taxi2.png'
                                 });
        
        NumMark++;
        } // if no repetir
     } // FOR MARKER
	
	}); // }.FUNCTION   (.DONE
        
        }else{
        
    $.post( "Marker_Hora.php", { LatitudMarker: LatitudMarker_Hora, LongitudMarker: LongitudMarker_Hora, 
                       Metros:  Metros_Redonda   }).done(
    function( data ) {  

    Tabla = JSON.parse(data);

    NumMark=0;
    for(i in Tabla)
    {

    Latitud_Historica = parseFloat(Tabla[i].LATITUD);
    Longitud_Historica = parseFloat(Tabla[i].LONGITUD);
    Posicion_Historica=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);

    if (Latitud_Historica!=auxlat || Longitud_Historica!=auxlon ){  

    auxlat =Latitud_Historica;  auxlon =Longitud_Historica;

    Marker_Marker_Hora[NumMark]=new google.maps.Marker({  
                        position:Posicion_Historica,        //animation:google.maps.Animation.DROP,
                        map: map,
                        title: Tabla[i].FECHA_HORA,
                        //animation:google.maps.Animation.BOUNCE, // SALTANDO
                        //draggable: true, // PERMITE ARRASTRARLOS
                        label: "1",
                        icon: Icono_Historico
                        //icon: 'taxi2.png'
                     });

    NumMark++;
    } // if no repetir
    } // FOR MARKER
    }); // }.FUNCTION   (.DONE
        
    }
    
    }); // }.LISTENER  ).LISTENER
} // CONSULTAMARKER
    
function Consulta_Hora_Marker(){
    
    Ruta_Historica=[];
    Ruta_Snap = [];
    LimpiarMapa();
    
    clearInterval(MarkerInterval);
    document.location.href='#service';
    
    ObtenerDateTime();

    $.post( "ConsultaDbHistorico.php", { FechaInicio: Fecha_Inicio_PHP, FechaFinal: Fecha_Final_PHP,
                                        HoraInicio:  Hora_Inicio_PHP,  HoraFinal:  Hora_Final_PHP        }).done(
        
        function( data ) { 

            Tabla = JSON.parse(data);
            NumMark=0;

            if(!Snap){
                PoliLinea_Historica.setMap(map);
                
                for(i in Tabla){
                    
                    Latitud_Historica = parseFloat(Tabla[i].LATITUD);
                    Longitud_Historica = parseFloat(Tabla[i].LONGITUD);
                    Posicion_Historica=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);
                    
                    if (Latitud_Historica!=auxlat || Longitud_Historica!=auxlon ){  

    auxlat =Latitud_Historica;  auxlon =Longitud_Historica;

    Ruta_Historica.push(Posicion_Historica);  

    PoliLinea_Historica.setPath(Ruta_Historica);  

    Marker_Hora_Marker[NumMark]=new google.maps.Marker({  
                                position:Posicion_Historica,
                                map: map,
                                title: Tabla[i].FECHA_HORA,
                                icon: Icono_Historico
                             });
    map.setCenter(Posicion_Historica);
    NumMark++;
    } // if no repetir
                } // FOR MARKER 
                
            }else{
                LimpiarMapa();
                Historico_Snap();
            } // ELSE
        });
} // FUNCION
    
function Historico_Snap(){
    
if(t==0){
    
    PoliLinea_Snap.setMap(map);
    NumMarkerSnap=0;
    p=0;
    Ent=0;
    Tabla_Long    = Tabla.length;
    Tabla_Entero  = parseInt(Tabla_Long/100);
    Tabla_Residuo = Tabla_Long%100;
    
    if(Tabla_Residuo>0) Tabla_Entero++;
}
    t=1;
    Ent++;
    
    if(Ent==Tabla_Entero){ Res=Tabla_Residuo}
    else {Res=100;}
    
    Ruta_Snap_Aux=[];
    
    for(i=0;i<Res;i++){    Ruta_Snap_Aux.push(Tabla[i+p].LATITUD+","+Tabla[i+p].LONGITUD);     }
    
    p=p+100;
    
    $.get('https://roads.googleapis.com/v1/snapToRoads', {
interpolate: true,
key: apiKey,
path: Ruta_Snap_Aux.join('|')

},function(data) {
        
        for (i = 0; i < data.snappedPoints.length; i++) {
            
            latlng = new google.maps.LatLng(data.snappedPoints[i].location.latitude,data.snappedPoints[i].location.longitude); 
            Marker_Snap[NumMarkerSnap]=new google.maps.Marker({
                position:latlng,    
                map: map,   
                icon: Icono_Historico,  
                title: String(NumMarkerSnap)    
            });
            Ruta_Snap.push(latlng);
            NumMarkerSnap++;
        }
        
        map.setCenter(latlng);
        cont++
        
        if(cont==Tabla_Entero)     {        PoliLinea_Snap.setPath(Ruta_Snap); t=0;    }else{  Historico_Snap(); }
    }); 
}
    
function Calendario_Inicial(){

    	if (Calendario1==1){
		Calendario1=0;
	    $('#Fecha_Inicio').DatePicker({
	    
	     flat: true,
	     date:  '',
	     current: '2016-03-05',
	     calendars: 1,
	     starts: 0,
	     mode: 'single',
	     view: 'days',
	     onChange: function(formated, dates){ 
	        if ($('#Fecha_Inicio').DatePickerGetDate(true) != "" && $('#Fecha_Inicio').DatePickerGetDate(true).length==10)
	         {
	            $('#Fecha_Inicio').DatePickerHide(); 
	            Calendario1=1;   
	            CalSet=1;
    			Fecha_Inicio_PHP = $('#Fecha_Inicio').DatePickerGetDate(true);
    			document.getElementById('Fecha_Inicio2').innerHTML  = Fecha_Inicio_PHP;  
	        }
	      }
	    	});
	}
 
 }

function Calendario_Final(){
 

	try{
		CalSet=0;
		if ($('#Fecha_Inicio').DatePickerGetDate(true).length==10)
		{
			CalSet=1;
		}
	 }catch(err){
		CalSet=0;
	 };

     if (Calendario2==1 && CalSet==1){
	Calendario2=0;

    $('#Fecha_Final').DatePicker({
    
    flat: true,
    date:  '',
    current: $('#Fecha_Inicio').DatePickerGetDate(true),
    calendars: 1,
    starts: 0,
    mode: 'single',
    view: 'days',
    onChange: function(formated, dates){ 

        if ($('#Fecha_Final').DatePickerGetDate(true) != "" && $('#Fecha_Final').DatePickerGetDate(true).length==10)
         {

            $('#Fecha_Final').DatePickerHide(); 
	            Calendario2=1;   
    			Fecha_Final_PHP = $('#Fecha_Final').DatePickerGetDate(true);
    			document.getElementById('Fecha_Final2').innerHTML  = Fecha_Final_PHP;  
        }
    }
    });
 }
 }

function Ocultar_Calendario1(){
 	$('#Fecha_Inicio').DatePickerHide();
 	Calendario1=1;
  }

function Ocultar_Calendario2(){
 	$('#Fecha_Final').DatePickerHide();
 	Calendario2=1;
 }
    
function LimpiarMapa(){
    
    PoliLinea_Historica.setMap(null);
    PoliLinea_Snap.setMap(null);
    PoliLinea_Real.setMap(null);
    Marker_Real.setMap(null);
    
    for (i in Marker_Hora_Marker)    {   Marker_Hora_Marker[i].setMap(null);       }
    for (i in Marker_Marker_Hora)    {   Marker_Marker_Hora[i].setMap(null);       }
    for (i in Marker_Snap)           {   Marker_Snap[i].setMap(null);              }
    
}
        
function ObtenerDateTime(){
    
    Fecha_Inicio_PHP = $('#Fecha_Inicio').DatePickerGetDate(true);
    Fecha_Final_PHP = $('#Fecha_Final').DatePickerGetDate(true);

    Tiempo = new Date(2016,10,10,$('#Tiempo_Hora1').timepicker('getHour'),$('#Tiempo_Minuto1').timepicker('getMinute'));  
    Hora_Inicio_PHP=String(Tiempo).substring(16,24);

    Tiempo = new Date(2016,10,10,$('#Tiempo_Hora2').timepicker('getHour'),$('#Tiempo_Minuto2').timepicker('getMinute'));  
    Hora_Final_PHP=String(Tiempo).substring(16,24);	
}
    

</script>
</body>
</html>