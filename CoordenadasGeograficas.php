<?php
session_start();
if(!isset($_SESSION['user'])) {   echo '<script> window.location="INICIAR_SESION/inicio_sesion.php"; </script>';   }
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
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDULHVVSQ-vjy1ScgiJU0hPuKb-IRt6bmw&libraries=geometry,drawing,places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    <script src="js/graphs.js"></script>
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
    
    <script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerwithlabel/src/markerwithlabel.js"></script>

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

        <div class="item active"  style="background-image: url('images/bg21.jpeg')" >
        <div class="carousel-caption">
        <div class="animated bounceInRight">
        <h2>Hola Mundo! <br>Somos ticoll</h2>
        <p>¿Quieres ver el recorrido de tu vehículo en tiempo real?</p>
        </div>
        </div>
        </div>              

        <div class="item" style="background-image: url('images/bg1.jpg')">                
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
 </div> <!--LATITUD LONGITUD ARRIBA DEL MAPA-->

        
 <div id="divmenu" class="AnimacionDerecha">
    
    <input type="button" id="Cerrar" value="X" onclick="OcultarHistoricos()">
        
    <div style="display:block;margin: 20px 0px 0px 0px;">
     <h5 class="TextoHistorico">FECHA INICIAL :</h5>
     <h5 id="Fecha_Inicio2" onmouseover="Mostrar_Calendario1();" class="TextoHistorico">0000-00-00</h5>
     <div style="margin:2px" id="Fecha_Inicio" onmouseleave="Ocultar_Calendario1();" ></div>
     <input type="text"  id="Tiempo_Hora1" value="12 AM" class="TextoHistorico">:
     <input type="text"  id="Tiempo_Minuto1" value="00" class="TextoHistorico">

    </div>

   <div style="display:block;margin: 15px 0px 0px 0px;">
    <h5 class="TextoHistorico">FECHA FINAL &nbsp :</h5>
    <h5 id="Fecha_Final2" onmouseover="Mostrar_Calendario2();" class="TextoHistorico">0000-00-00</h5>
    <div  id="Fecha_Final" onmouseleave="Ocultar_Calendario2();"></div>
    <input type="text"  id="Tiempo_Hora2" value="12 AM" class="TextoHistorico">:
    <input type="text"  id="Tiempo_Minuto2" value="00" class="TextoHistorico" >
   </div>   

   <div style="display:block;margin: 15px 0px 0px 0px;">    
        <input id="Boton_Real23" type="button" value="CONSULTAR HISTORICO" onclick="Consulta_Hora_Marker(),OcultarHistoricos()"/>
   </div>
        
   <div style="display:block;margin: 15px 0px 0px -10px;">   
        <input type="text" id="Metros" placeholder="Digite metros a la redonda">
        <!--<input type="checkbox" id="markerfecha2"  onclick="Snap=!Snap;"><h3 id="Pulsalo">Snap</h3> -->
   </div>
     
   <div style="display:block;margin: 15px 0px 0px 0px;">     
       <input type="button" id="Ubicar" value="UBICAR MARKER" onclick="Consulta_Marker_Hora(),OcultarHistoricos()">
   </div>
    
   <div style="display:inline-block;margin: 15px 0px 0px 0px;">     
        <h4 id="Pulsalo2">Combinar</h4>
        <input type="checkbox" id="markerfecha" onclick="Combinar=!Combinar;">
   </div>
     
       <div style="display:block;margin: 15px 0px 0px 0px;">     
       <input type="button" id="Distancia_Recorrida" value="Distancia Recorrida" onclick="MostrarDistancia(),OcultarHistoricos()">
   </div> 
 </div>
         
 <div id="googleMap"></div>
 <input type="button" id="Boton_Real24" value="Tiempo Real" onclick="Consulta_Real();">
 <p class="auto"><input type="text" id="autoc"/></p>
    
 <select id="seleccion" onChange="Centrar()"><option>Centrar Mapa</option></select>
 <input type="button" id="btHist" value="Historico" onclick="MostrarHistoricos()">
 
 <div id="ListaCheckBoxes">
 <input type="button" id="btAdd" value="Cargar Vehiculos" onclick="CargarVehiculos()"/>
 </div>
    
<div id="MenuDistancia">
    <input type="button" id="Cerrar_Distancia" value="X" onclick="OcultarDistancia()">
    <div id="divGraph" style="margin:20px 20px;"></div>

    </div>
    
 </section>

<section id="contact"> <!--#contact-->
        
    <div class="container">

    <div class="row">

    <div class="section-title text-center wow fadeInDown">
    <h2>Contáctanos</h2><BR>
    <h4>Envia tus mensaje con tus requerimientos</h4>
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
    <textarea name="message" id="mensaje" placeholder="Your Message" required=""></textarea>
    </div>
    <input type="submit" class="btn btn-blue pull-right" value="Enviar" id="msg-submit">
    </form>
    </div> <!-- end .contact-form -->
    </div> <!-- .col-md-8 -->

    <div class="contact-details">
    <br><br><br><br><br><br><h4>Llámanos!</h4><br><br><br>
    <p>+57 301-442-3053 <br> <br> +57 300-757-9899</p>
    </div> <!-- end .contact-details -->


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

var Marker_Real=[];             var Latitud_Historica;          var Latitud;            var Fecha_Inicio_PHP;       var Cont_Markers;
var Marker_Marker_Hora=[];      var Longitud_Historica;         var Longitud;           var Fecha_Final_PHP;        var Cont_Historico;
var Marker_Hora_Marker=[];      var PoliLinea_Historica=[];     var LatAux=[];          var Hora_Inicio_PHP;        var Cont_CrearHTML=0;
var LatMarker_Hora;             var PoliLinea_Real=[];          var LonAux=[];          var Hora_Final_PHP;         var Cont_Vehiculos=0;
var LonMarker_Hora;             var Ruta_Historica=[];          var Fecha_Hora;         var Calendario1=1;          var Cont_Join;
var Metros_Redonda;             var Ruta_Real=[];               var Posicion=[];        var Calendario2=1;          var i;
var Solicitar_Despliegue=true;  var Tabla_Usuarios;             var MarkerInterval;     var Mapa_Centrado;          var RealAgain=[];
var Solicitar_Vehiculos=true;   var Tabla;                      var Seleccionado;       var map;                    var Checkes=[];       
var drawingManager;             var Tiempo;                     var Combinar=false;     var CalSet=0;               var Hide_Hist=true;
var Tabla_Historico=[];         var year; var month; var day; var year1; var month1; var day1;
var Recargar_Vehiculos=true;    var hour; var min; var hour1; var min1;
var Tabla_Select=[];    
var Icono_Historico =[];
var Distancia_Recorrida;
var Hide_Dist=true;
var Cont_Distancia=-1;  var Tabla_Distancias=[];
var Tabla_Distancia=[];
var Distancias_Recorridas=[];    
   

var Colores={0:'red',1:'blue',2:'magenta',3:'coral',4:'green',5:'cyan',6:'darkgoldenrod',7:'darkorange',8:'darkslateblue'};    

var apiKey = 'AIzaSyCF6NfbnvzeseQoQPP5Bh6iSHA3_fcHu1g';

var Select = document.getElementById("seleccion");

var myCenter=new google.maps.LatLng(parseFloat("10.95471"),parseFloat("-74.79636"));

var mapOptions ={
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center : myCenter,
                zoom : 16,
                disableDefaultUI: false    };

map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('autoc'));

map.controls[google.maps.ControlPosition.RIGHT_CENTER].push( document.getElementById('Boton_Real24'));
    
map.controls[google.maps.ControlPosition.LEFT_TOP].push(  document.getElementById('seleccion'));
    
map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(  document.getElementById('btHist'));   
    
map.controls[google.maps.ControlPosition.LEFT_CENTER].push(  document.getElementById('ListaCheckBoxes'));   

var autocomplete = new google.maps.places.Autocomplete(    document.getElementById('autoc'));
autocomplete.bindTo('bounds', map);
autocomplete.addListener('place_changed', function() {
var place = autocomplete.getPlace();
if (place.geometry.viewport) {      map.fitBounds(place.geometry.viewport);    } 
else {       map.setCenter(place.geometry.location);       map.setZoom(17);    }
});

google.maps.LatLng.prototype.kmTo = function(a){
    var e = Math, ra = e.PI/180;
    var b = this.lat() * ra, c = a.lat() * ra, d = b - c;
    var g = this.lng() * ra - a.lng() * ra;
    var f = 2 * e.asin(e.sqrt(e.pow(e.sin(d/2), 2) + e.cos(b) * e.cos
    (c) * e.pow(e.sin(g/2), 2)));
    return f * 6378.137;
    }

google.maps.Polyline.prototype.inKm = function(n){
    var a = this.getPath(n), len = a.getLength(), dist = 0;
    for (var i=0; i < len-1; i++) {
       dist += a.getAt(i).kmTo(a.getAt(i+1));
    }
    return dist;
    }

$('#Tiempo_Hora1').timepicker  ({   showMinutes: false,    showPeriod: true,            rows: 4    	});
$('#Tiempo_Minuto1').timepicker({   showHours: false,      minutes: { interval: 1 },    rows: 6    	});
$('#Tiempo_Hora2').timepicker  ({   showMinutes: false,    showPeriod: true,            rows: 4    	});
$('#Tiempo_Minuto2').timepicker({   showHours: false,      minutes: { interval: 1 },    rows: 6    	});

  
function Centrar(){
    for (i in Tabla_Usuarios){
        Mapa_Centrado=true;
        if(Tabla_Usuarios[i].ID_VEHICULO==document.getElementById('seleccion').value){map.setCenter(Posicion[i]); Seleccionado=i;}
    }
 }
   
function CargarVehiculos(){
    document.getElementById("ListaCheckBoxes").style.height ='auto';
    clearInterval(MarkerInterval);
    if(Solicitar_Vehiculos){
        Cont_Vehiculos=0;
        $.post("MySQL/Vehicles_User.php",function( data ) {  
            Tabla_Usuarios = JSON.parse(data);
            for (i in Tabla_Usuarios){                CrearCheck();            }
        });
        
    }else {        if(!Solicitar_Despliegue){            CrearCheck();        }    }
 }

function CrearCheck(){
        
    if (Solicitar_Despliegue){
        
    Icono_Historico[Cont_Vehiculos]={
                      path: google.maps.SymbolPath.CIRCLE,
                      scale: 5,
                      strokeColor: '#000000',
                      strokeWeight: 2,
                      fillColor: Colores[Cont_Vehiculos],
                      fillOpacity:1  }
        
    RealAgain[Cont_Vehiculos]=0;
    Tabla_Select[Cont_Vehiculos]=false;
    //Ruta_Snap[Cont_Vehiculos]=[];
    Ruta_Real[Cont_Vehiculos]=[];
    Ruta_Historica[Cont_Vehiculos]=[];
    
    Marker_Hora_Marker[Cont_Vehiculos]=[];
    Marker_Marker_Hora[Cont_Vehiculos]=[]; 
    //PoliLinea_Snap[Cont_Vehiculos] = new google.maps.Polyline({ path: Ruta_Snap[Cont_Vehiculos],    strokeColor: 'black',    strokeWeight: 3   });
    PoliLinea_Real[Cont_Vehiculos] = new google.maps.Polyline({ path: Ruta_Real[Cont_Vehiculos],  strokeColor: '#FFFF00',  strokeOpacity: 1.0,  strokeWeight: 5    });
    PoliLinea_Historica[Cont_Vehiculos] = new google.maps.Polyline({ path: Ruta_Historica[Cont_Vehiculos],  strokeColor: '#000000', strokeOpacity: 1.0, strokeWeight: 5 });
    
    PoliLinea_Real[Cont_Vehiculos].setMap(map);
    PoliLinea_Historica[Cont_Vehiculos].setMap(map);
    Cont_Vehiculos++;
        
    if (Solicitar_Vehiculos) {
    Cont_CrearHTML=0;
    Solicitar_Vehiculos=false;

    var divSubmit = $(document.createElement('div'));
    $(divSubmit).append('<input type=button onclick="SeleccionVehiculos()" id="Seleccionar" value=Seleccionar />');
    $('#btAdd').after("<br>");
    $('#btAdd').after(divSubmit);
 }
  
        Checkes[Cont_CrearHTML]=false;
        var texto=Tabla_Usuarios[Cont_CrearHTML].ID_VEHICULO;
        var divSubmit = $(document.createElement('div'));
        
        $(divSubmit).append('<input type=checkbox onclick="Checkes['+Cont_CrearHTML+']=!Checkes['+Cont_CrearHTML+'];" id=Check'+Cont_CrearHTML+' style=position:absolute;margin-left:-30px;cursor:pointer;/>'+'<h5 id=H'+Cont_CrearHTML+' style=position:absolute;color:white;cursor:default;margin-left:-14px;margin-top:1px;>'+texto+'</h5>');
        
        Cont_CrearHTML++;
        $('#btAdd').after(divSubmit);
        $('#btAdd').after("<br>");
        $('#btAdd').after("<br>");
    } else{
        
        document.getElementById("Seleccionar").style.display = 'inline';
        for (i=0;i<Cont_CrearHTML;i++){ document.getElementById("Check"+i).style.display = 'inline'; document.getElementById("H"+i).style.display = 'inline';    }
    }
 }    
    
function SeleccionVehiculos(){
    
    LimpiarMapa();
    Recargar_Vehiculos=true;
    MarkerInterval = setInterval(function(){SetMarkerVarios()}, 2000);
    Solicitar_Despliegue=false;
    document.getElementById("Seleccionar").style.display = 'none';
    
    for (i in Checkes){
        
        if(Checkes[i] && !Tabla_Select[i])
            {
        var option = document.createElement("option");
        option.text = Tabla_Usuarios[i].ID_VEHICULO;
        option.style="font-weight: bold;color:"+Colores[i];
        Select.add(option);
        Tabla_Select[i]=true;
            }
    }
    
    for (i=0;i<Cont_CrearHTML;i++){ document.getElementById("Check"+i).style.display = 'none'; document.getElementById("H"+i).style.display = 'none';    }
    //SetMarkerVarios();
    document.getElementById("ListaCheckBoxes").style.height ='1px';
 }

function SetMarkerVarios(){
    
    Posicion=[];
    
    $.post("MySQL/MarkerReal_Vehiculos.php", {Users: Tabla_Usuarios, Marcas: Checkes  }).done(
        
        function( data ) {
            
            if(data=="Empty"){   clearInterval(MarkerInterval);}else{ var Tabla2=JSON.parse(data);    }
            
            Cont_Join=0;
            
            for(i in Checkes)
            {
                if(Checkes[i])
                {
                    Latitud = parseFloat(Tabla2[Cont_Join++].LATITUD);
                    Longitud = parseFloat(Tabla2[Cont_Join++].LATITUD);
                    Fecha_Hora=Tabla2[Cont_Join++].LATITUD;
                    Posicion[i]=new google.maps.LatLng(Latitud,Longitud);
                    
                    if (Mapa_Centrado && Seleccionado==i){
document.getElementById('fila_latitud').innerHTML  = Latitud;   document.getElementById('fila_fecha').innerHTML    = Fecha_Hora.substring(0,10);   
document.getElementById('fila_longitud').innerHTML = Longitud;  document.getElementById('fila_hora').innerHTML     = Fecha_Hora.substring(11,19);
}
                    if (Latitud!=LatAux[i] || Longitud!=LonAux[i] || RealAgain[i]==0 || Recargar_Vehiculos ){ 
                        LatAux[i] =Latitud;    LonAux[i] =Longitud;
                        RealAgain[i]=1;
                        
                        if (Marker_Real[i] != null) {        Marker_Real[i].setMap(null);        }
                        
                        Ruta_Real[i].push(Posicion[i]);
                        PoliLinea_Real[i].setPath(Ruta_Real[i]);
                        Marker_Real[i]= new MarkerWithLabel({
                            position: Posicion[i],
                            map: map,
                            raiseOnDrag: false,
                            labelContent: Tabla_Usuarios[i].ID_VEHICULO,
                            labelAnchor: new google.maps.Point(17,9 ),
                            labelClass: "labels",
                            labelStyle: {opacity: 1},
                            icon: Icono_Historico[i]
                        });
                    }
                }
            }
                                    Recargar_Vehiculos=false;

        });
}

function Consulta_Real(){
    
    LimpiarMapa();
    OcultarHistoricos();
    for (i in PoliLinea_Real)        {   PoliLinea_Real[i].setMap(map); RealAgain[i]=0;       }
    clearInterval(MarkerInterval);
    MarkerInterval = setInterval(function(){SetMarkerVarios()}, 2000);
 }
    
function Consulta_Hora_Marker(){
    
    for (i in Ruta_Historica){  Ruta_Historica[i]=[];  };

    Cont_Historico=-1;
    //Ruta_Snap = [];
    LimpiarMapa();
    
    clearInterval(MarkerInterval);

    if(msj!="Error" && typeof(Fecha_Inicio_PHP)==='undefined' && typeof(Fecha_Final_PHP)==='undefined'){
    alert("No se permiten fechas en blanco")
    }

    year=parseInt(Fecha_Inicio_PHP.substring(0, 4));
    month=parseInt(Fecha_Inicio_PHP.substring(5, 7));
    day=parseInt(Fecha_Inicio_PHP.substring(8, 10));

    year1=parseInt(Fecha_Final_PHP.substring(0, 4));
    month1=parseInt(Fecha_Final_PHP.substring(5, 7));
    day1=parseInt(Fecha_Final_PHP.substring(8, 10));

    var msj=ObtenerDateTime();
Consulta_Hora_Marker_Graficar();
    
    
    if(msj!="Error" && year>year1 && month==month1){
    alert("La hora final está antes de la inicial")
    }
    if(msj!="Error" && year>year1 && month!=month1){
    alert("La hora final está antes de la inicial")
    }
    if(msj!="Error" && year<=year1 && month==month1 && day<day1){
    Posicion=[];
    Consulta_Hora_Marker_Graficar();
    }
    if(msj!="Error" && year<=year1 && month<month1){
    Posicion=[];
    Consulta_Hora_Marker_Graficar();
    }
    if (msj!="Error" && year<=year1 && month==month1 && day==day1 && hour<=hour1){
    Posicion=[];
    Consulta_Hora_Marker_Graficar();
    }
    if (msj!="Error" && year<=year1 && month==month1 && day==day1 && hour>hour1){
    alert("La hora final está antes de la inicial");
    }
    if(msj!="Error" && year<=year1 && month>month1){
    alert("La fecha final está antes de la inicial")
    }
    if(msj!="Error" && year<=year1 && month==month1 && day>day1){
    alert("La fecha final está antes de la inicial")
    }


 }

function Consulta_Hora_Marker_Graficar(){

    Cont_Historico++;

    if (Cont_Historico<Tabla_Usuarios.length){
    if (Checkes[Cont_Historico]){

    $.post( "MySQL/ConsultaDbHistorico.php", { FechaInicio: Fecha_Inicio_PHP, FechaFinal: Fecha_Final_PHP,
                                               HoraInicio:  Hora_Inicio_PHP,  HoraFinal:  Hora_Final_PHP,
                                               Vehiculo: Tabla_Usuarios[Cont_Historico].ID_VEHICULO        }).done(
        
    function( data ) { 
        Tabla_Historico[Cont_Historico] = JSON.parse(data);
        Cont_Markers=0;

         if (typeof(PoliLinea_Historica[Cont_Historico])==='undefined'){
 
             alert("Su consulta es vacía")
         }else{

        //if(!Snap){ 
        PoliLinea_Historica[Cont_Historico].setMap(map);

        for(i in Tabla_Historico[Cont_Historico]){
            Latitud_Historica = parseFloat(Tabla_Historico[Cont_Historico][i].LATITUD);
            Longitud_Historica = parseFloat(Tabla_Historico[Cont_Historico][i].LONGITUD);
            Posicion[Cont_Historico]=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);

            Ruta_Historica[Cont_Historico].push(Posicion[Cont_Historico]); 
            PoliLinea_Historica[Cont_Historico].setPath(Ruta_Historica[Cont_Historico]);
            
            if (i==0){
            
                Marker_Hora_Marker[Cont_Historico][Cont_Markers++]= new MarkerWithLabel({
                position: Posicion[Cont_Historico],
                map: map,
                raiseOnDrag: false,
                labelContent: "I."+Tabla_Usuarios[Cont_Historico].ID_VEHICULO,
                labelAnchor: new google.maps.Point(17,9 ),
                labelClass: "labels",
                labelStyle: {opacity: 1},
                title:Tabla_Historico[Cont_Historico][i].FECHA_HORA,
                icon: Icono_Historico[Cont_Historico]
                });
                
            }else if(i==Tabla_Historico[Cont_Historico].length-1){
                
                Marker_Hora_Marker[Cont_Historico][Cont_Markers++]= new MarkerWithLabel({
                position: Posicion[Cont_Historico],
                map: map,
                raiseOnDrag: false,
                labelContent: "F."+Tabla_Usuarios[Cont_Historico].ID_VEHICULO,
                labelAnchor: new google.maps.Point(17,9 ),
                labelClass: "labels",
                labelStyle: {opacity: 1},
                title:Tabla_Historico[Cont_Historico][i].FECHA_HORA,
                icon: Icono_Historico[Cont_Historico]
                });
                
            }else{
                
                Marker_Hora_Marker[Cont_Historico][Cont_Markers++]=new google.maps.Marker({  
                position:Posicion[Cont_Historico],
                map: map,
                title: Tabla_Historico[Cont_Historico][i].FECHA_HORA,
                icon: Icono_Historico[Cont_Historico]
                });
            }
            
        }
        }  

        //}else{          //Historico_Snap(Cont_Historico);        } 
  
        Consulta_Hora_Marker_Graficar();
    });                                          

    }else{           Consulta_Hora_Marker_Graficar();             }
 }
    
    //if(Cont_Historico==Tabla_Usuarios.length-1){    Distancia_KM();    /*Historico_Snap();*/    }
 } 
 
function Distancia_KM(){
    Cont_Distancia++;
    if (Cont_Distancia<Tabla_Usuarios.length){
    if (Checkes[Cont_Distancia]){

    $.post( "MySQL/ConsultaDbHistorico.php", { FechaInicio: Fecha_Inicio_PHP, FechaFinal: Fecha_Final_PHP,
                                               HoraInicio:  Hora_Inicio_PHP,  HoraFinal:  Hora_Final_PHP,
                                               Vehiculo: Tabla_Usuarios[Cont_Distancia].ID_VEHICULO        }).done(
        
    function( data ) {
        
        Tabla_Distancia[Cont_Distancia] = JSON.parse(data);

        for(i in Tabla_Distancia[Cont_Distancia]){

            Posicion[Cont_Distancia]=new google.maps.LatLng(parseFloat(Tabla_Distancia[Cont_Distancia][i].LATITUD),parseFloat(Tabla_Distancia[Cont_Distancia][i].LONGITUD));
            
            Ruta_Historica[Cont_Distancia].push(Posicion[Cont_Distancia]); 
            PoliLinea_Historica[Cont_Distancia].setPath(Ruta_Historica[Cont_Distancia]);
        } 

        Distancias_Recorridas.push(PoliLinea_Historica[Cont_Distancia].inKm().toFixed(5));
        Distancia_KM();
    });                                          

    }else{ Distancias_Recorridas.push(0);          Distancia_KM();             }
 }
  if (Cont_Distancia==Tabla_Usuarios.length){ DiagramaBarras();}  

} 
    
function Consulta_Marker_Hora(){
 
    Cont_Historico=-1;
    LimpiarMapa();
    clearInterval(MarkerInterval);

    map.addListener('click', function(e) {

    LatMarker_Hora=e.latLng.lat();
    LonMarker_Hora=e.latLng.lng();
    Metros_Redonda=document.getElementById('Metros').value;

    map.setCenter(new google.maps.LatLng(parseFloat(LatMarker_Hora),parseFloat(LonMarker_Hora)));

    google.maps.event.clearListeners(map, 'click');
    
    ObtenerDateTime();
    Posicion=[];

    Consulta_Marker_Hora_Graficar()
        
    }); 
 }

function Consulta_Marker_Hora_Graficar(){
       
    Cont_Historico++; 
    
    if (Cont_Historico<Tabla_Usuarios.length){
    if (Checkes[Cont_Historico]){
    
        if(Combinar){
                
    $.post("MySQL/Marker_Hora_Fecha.php", {FechaFinal: Fecha_Final_PHP, FechaInicio: Fecha_Inicio_PHP,HoraInicio: Hora_Inicio_PHP,  HoraFinal: Hora_Final_PHP , LatitudMarker: LatMarker_Hora, LongitudMarker: LonMarker_Hora, Metros:  Metros_Redonda, Vehiculo: Tabla_Usuarios[Cont_Historico].ID_VEHICULO   }).done(
                
    function( data ) {  

     Tabla = JSON.parse(data);



     Cont_Markers=0;
     for(i in Tabla)
        {
            
            Latitud_Historica = parseFloat(Tabla[i].LATITUD);
            Longitud_Historica = parseFloat(Tabla[i].LONGITUD);
            Posicion[Cont_Historico]=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);

            Marker_Marker_Hora[Cont_Historico][Cont_Markers++]=new google.maps.Marker({  
            position:Posicion[Cont_Historico],        
            map: map,
            title: Tabla[i].FECHA_HORA,
            icon: Icono_Historico[Cont_Historico]
            });
        
        }
        Consulta_Marker_Hora_Graficar();
        }); 
        
        }
        else{
        
    $.post( "MySQL/Marker_Hora.php", { LatitudMarker: LatMarker_Hora, LongitudMarker: LonMarker_Hora, 
                       Metros:  Metros_Redonda, Vehiculo: Tabla_Usuarios[Cont_Historico].ID_VEHICULO   }).done(
    function( data ) {  

    Tabla = JSON.parse(data);
    Cont_Markers=0;
    for(i in Tabla)
    {
    Latitud_Historica = parseFloat(Tabla[i].LATITUD);
    Longitud_Historica = parseFloat(Tabla[i].LONGITUD);
    Posicion[Cont_Historico]=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);

    Marker_Marker_Hora[Cont_Historico][Cont_Markers++]=new google.maps.Marker({  
                        position:Posicion[Cont_Historico],      
                        map: map,
                        title: Tabla[i].FECHA_HORA,
                        icon: Icono_Historico[Cont_Historico]
    });}
    Consulta_Marker_Hora_Graficar();
    }); 
        
    } // ELSE
        
        }else{           Consulta_Marker_Hora_Graficar();             }
        }
 }
 
function LimpiarMapa(){

    for (i in Marker_Real)           {   Marker_Real[i].setMap(null);          }
    for (i in Marker_Hora_Marker){     for (j in Marker_Hora_Marker[i]){    Marker_Hora_Marker[i][j].setMap(null);   }      }
    for (i in Marker_Marker_Hora){     for (j in Marker_Marker_Hora[i]){    Marker_Marker_Hora[i][j].setMap(null);   }      }

    for (i in PoliLinea_Real)        {   PoliLinea_Real[i].setMap(null);       }
    for (i in PoliLinea_Historica)   {   PoliLinea_Historica[i].setMap(null);  }

    //for (i in Marker_Snap)           {   Marker_Snap[i].setMap(null);          }
 }
        
function ObtenerDateTime(){
    
try{
    
    Tiempo = new Date(2016,10,10,$('#Tiempo_Hora1').timepicker('getHour'),$('#Tiempo_Minuto1').timepicker('getMinute'));  
    Hora_Inicio_PHP=String(Tiempo).substring(16,24);

    hour=parseInt(String(Tiempo).substring(16,18));
    min=parseInt(String(Tiempo).substring(19,21));


    Tiempo = new Date(2016,10,10,$('#Tiempo_Hora2').timepicker('getHour'),$('#Tiempo_Minuto2').timepicker('getMinute'));  
    Hora_Final_PHP=String(Tiempo).substring(16,24);	

    hour1=parseInt(String(Tiempo).substring(16,18));
    min1=parseInt(String(Tiempo).substring(19,21));

}catch(err){ return "Error";}

Fecha_Inicio_PHP='2016-03-10';
Fecha_Final_PHP='2016-03-30';
Hora_Inicio_PHP='10:02:00';
Hora_Final_PHP='10:05:00'
    
 }

function MostrarDistancia(){

    Hide_Dist=false;
    document.getElementById("MenuDistancia").style="animation-duration:2s;animation-name:bounceInRight;";
    document.getElementById("MenuDistancia").style.display = 'inline-block';
    ObtenerDateTime();
    Distancia_KM();
    
} 

function OcultarDistancia(){

        if (!Hide_Dist){
        document.getElementById("MenuDistancia").style="animation-duration:1s;animation-name:Steven;";
        document.getElementById("MenuDistancia").style.display = 'inline-block';
        setTimeout(function(){ document.getElementById("MenuDistancia").style.display = 'none'; }, 800);
        }
        Hide_Dist=true;
    }

function MostrarHistoricos(){
    Hide_Hist=false;
    document.getElementById("divmenu").style="animation-duration:2s;animation-name:bounceInRight;";
    document.getElementById("divmenu").style.display = 'inline-block';

}

function OcultarHistoricos(){
        if (!Hide_Hist){
        document.getElementById("divmenu").style="animation-duration:1s;animation-name:Steven;";
        document.getElementById("divmenu").style.display = 'inline-block';
        setTimeout(function(){ document.getElementById("divmenu").style.display = 'none'; }, 800);
        }
        Hide_Hist=true;
}
  
function Mostrar_Calendario1(){

    	if (Calendario1==1){
		Calendario1=0;
	    $('#Fecha_Inicio').DatePicker({
	    
	     flat: true,
	     date:  '',
	     current: '2016-03-29',
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
             }}
    
function Ocultar_Calendario1(){
 	$('#Fecha_Inicio').DatePickerHide();
 	Calendario1=1;
  }    

function Mostrar_Calendario2(){

    if (Calendario2==1){
	Calendario2=0;

    $('#Fecha_Final').DatePicker({
    
    flat: true,
    date:  '',
    current: '2016-03-29',
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

function Ocultar_Calendario2(){
 	$('#Fecha_Final').DatePickerHide();
 	Calendario2=1;
 }

function DiagramaBarras(){
    var Nombres=[];
    for (i in Tabla_Usuarios){Nombres.push(Tabla_Usuarios[i].ID_VEHICULO);}
    
    var graph = new BAR_GRAPH('hBar');  // hBar: Horizontal   vBar:Vertical
    graph.values = Distancias_Recorridas;
    graph.labels = Nombres;
    graph.showValues = 2; // 0:% only   -  1: abs & %   -   2:abs only    - ninguno
    graph.barWidth = 15; // ANCHO DE LAS BARRAS
    graph.barLength = 2; // LARGO DE LAS BARRAS
    graph.labelSize = 20;// SIZE NOMBRES
    graph.absValuesSize = 20;// SIZE VALORES
    graph.percValuesSize = 0;
    graph.graphPadding = 5;
    graph.graphBGColor = 'red';
    graph.graphBorder = '10px solid darkmagenta';
    graph.barColors = 'green';
    graph.barBGColor = 'blue';
    graph.barBorder = '2px outset white';
    graph.labelColor = 'white';
    graph.labelBGColor = 'black';
    graph.labelBorder = '1px solid white';
    graph.absValuesColor = 'cyan';
    graph.absValuesBGColor = 'magenta';
    graph.absValuesBorder = '2px groove white';
    document.getElementById('divGraph').innerHTML = graph.create();
    
    var izqmarg = 661 - document.getElementById('MenuDistancia').clientWidth;
    document.getElementById('MenuDistancia').style.marginLeft =  izqmarg + "px";

}    

/*    
var Ruta_Snap=[];var PoliLinea_Snap = [];
var latlng;var Snap=false;var Ruta_Snap_Aux=[];var NumMarkerSnap=0; 
var Ent=0;var Res;var t=0;var Tabla_Residuo;
var cont=[];cont[0]=0;cont[1]=0;var Tabla_Entero;var Cont_Snap=0;var Tabla_Long;var Marker_Snap=[];
var Cont_Aux=100;    var Contador=0;
function Historico_Snap(){
    console.log(Contador);
    
    if(t==0 || Contador!=Cont_Aux){
    
    PoliLinea_Snap[Contador].setMap(map);
    NumMarkerSnap=0;
    Cont_Snap=0;
    Ent=0;
    Tabla_Long    = Tabla_Historico[Contador].length;
    Tabla_Entero  = parseInt(Tabla_Long/100);
    Tabla_Residuo = Tabla_Long%100;
    
    if(Tabla_Residuo>0) Tabla_Entero++;
    }
    Cont_Aux=Contador;
    t=1;
    Ent++;
    
    if(Ent==Tabla_Entero){ Res=Tabla_Residuo}
    else {Res=100;}
    
    Ruta_Snap_Aux=[];
    
    for(i=0;i<Res;i++){
        console.log("se mete");
        Ruta_Snap_Aux.push(Tabla_Historico[Contador][i+Cont_Snap].LATITUD+","+Tabla_Historico[Contador][i+Cont_Snap].LONGITUD);
    }
    
    Cont_Snap=Cont_Snap+100;
    
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
            Ruta_Snap[Contador].push(latlng);
            NumMarkerSnap++;
        }
        
        map.setCenter(latlng);
        cont[Contador]++;
        console.log("el cont es: "+cont[Contador]+"  y el conthis es: "+Contador+" el tablaentero es: "+Tabla_Entero);
        if(cont[Contador]==Tabla_Entero)     
        {
            PoliLinea_Snap[Contador].setPath(Ruta_Snap[Contador]);
            Contador++;
            t=0;
            if(Contador!=Tabla_Usuarios.length-1){
            Historico_Snap(); 
            }
        }else{
            Historico_Snap(); 
        }
    }); 
 }
*/  
    
</script>
</body>
</html>