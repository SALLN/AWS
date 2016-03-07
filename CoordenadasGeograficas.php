<!DOCTYPE html>
 <html lang="en" class="no-js">
<head>

    <link rel="stylesheet" media="screen" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <link rel="shortcut icon" href="taxi6.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta charset="utf-8">

    <title>Coordenadas Ticoll</title>
        
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
    	<link rel="stylesheet" href="include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
        <link rel="stylesheet" href="jquery.ui.timepicker.css?v=0.3.3" type="text/css" />	
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="styleSheet" href="css/encabezado.css">

    			
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
	
<body>

    <div id="result"><?php include("ConsultaDB.php"); ?></div> 
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
                            <img src="img/logo.png" alt="Kasper Logo">
                        </a>
                    </h1>
                    <!-- /logo -->
                </div>
                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#service-bottom">Historico</a></li>
                            <li><a href="#service">Mapa</a></li>
                            <li><a href="#contact">Contact</a></li>
                              
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

                    <div class="item active"  style="background-image: url('img/slider/bg1.jpeg')" >
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>HELLO WORLD! <br>WE ARE TICOLL</h2>
                                <p>ACA QUE VAMOS A PONER? 1</p>
                            </div>
                        </div>
                    </div>              

                    <div class="item" style="background-image: url('img/slider/bg21.jpg')">                
                        <div class="carousel-caption">
                            <div class="animated bounceInDown">
                                <h2>HELLO WORLD! <br>WE ARE TICOLL</h2>
                                <p>ACA QUE VAMOS A PONER? 2</p>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image: url('img/slider/bg3.jpg')">                 
                         <div class="carousel-caption">
                            <div class="animated bounceInUp">
                                <h2>HELLO WORLD! <br>WE ARE TICOLL</h2>
                                <p>ACA QUE VAMOS A PONER? 3</p>
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
        
           
<section id="service-bottom">

                
              
                <div class="container">

                    <div class="mobile-device">
                       <img data-wow-delay="0.2s" class="img-responsive black  wow fadeInLeftBig" src="img/icons/map.png" alt="iPhone Black">
                        <img data-wow-delay="0.5s" class="img-responsive white  wow fadeInLeftBig" src="img/icons/streed.png" alt="iPhone White">
                    </div>

                <div class="service-features wow fadeInRight">
                    <h3>Conoce tu recorrido y ubicación histórica</h3>

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
                        <div> 

                        <label>HORA:</label>
                        <input type="text" style="width: 43px;  text-align:center" id="Tiempo_Hora1" value="5 PM">
                        , <label>MINUTOS:</label>
                        <input type="text" style="width: 23px;  text-align:center" id="Tiempo_Minuto1" value="00">
                        , <label>SEGUNDOS:</label>
                        <input type="text" style="width: 23px; text-align:center" id="Tiempo_Segundo1" value="00">
                        </div>

                    <li>
                    
                    <li>
                    <div>

                                <label>HORA:</label>
                                <input type="text" style="width: 43px;  text-align:center" id="Tiempo_Hora2" value="5 PM">
                                , <label>MINUTOS:</label>
                                <input type="text" style="width: 23px;  text-align:center" id="Tiempo_Minuto2" value="00">
                                , <label>SEGUNDOS:</label>
                                <input type="text" style="width: 23px; text-align:center" id="Tiempo_Segundo2" value="00">
                    </div>


                    </li>

                </ul>

                </div>
            </div>
        



        </BR>
       </BR>

     </BR>

     </BR>
     </BR>

     </BR>

     </BR>
    </BR>
    </BR>

     </BR>
    </BR>


     </BR>
        <input class="btn btn-blue" id="Boton_Real23" type="button" value="CONSULTAR HISTORICO" onclick="Consulta_Historico();"/>
        

      <!--
        #service-bottom
        ========================== -->
<script>
	$(document).ready(function() {

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

    	$('#Tiempo_Segundo1').timepicker({
            showHours: false,
            minuteText: 'Segundos',
            minutes: { interval: 1 },
            rows: 6,
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

    	$('#Tiempo_Segundo2').timepicker({
            showHours: false,
            minuteText: 'Segundos',
            minutes: { interval: 1 },
            rows: 6,
            onClose: function() {
            }
    	});
 	});
</script>


</section>



 <section id="service"> <!--#Mapa-->

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-10 wow fadeInLeft">
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="img/icons/longi.jpg" class="media-object" alt="Monitor">
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
                                    <img src="img/icons/longi.jpg" alt="Cog">
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
                                    <img src="img/icons/fecha.jpg" alt="Ruler">
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
                                    <img src="img/icons/hora.png" alt="Camera">
                                </a>
                                <div class="media-body">
                                    <h3>Hora</h3>
                                    <p id="fila_hora">00:00:00</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

<div id="googleMap"></div>
  
  </BR>

  <input class="btn btn-blue" id="Boton_Real24" type="button" value="CONSULTAR TIEMPO REAL" onclick="Consulta_Real();"/>

</section>


            <section id="contact"> <!--#contact-->
                    <div class="container">
                        <div class="row">
                            <div class="section-title text-center wow fadeInDown">
                         <h2>Contact Us</h2>
                         <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                         </div>
                    
                            <div class="col-md-8 col-sm-9 wow fadeInLeft">
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
                                <input type="submit" class="btn btn-blue pull-right" value="SEND MESSAGE" id="msg-submit">
                            </form>
                         </div> <!-- end .contact-form -->
                         </div> <!-- .col-md-8 -->

                         <div class="col-md-4 col-sm-3 wow fadeInRight">
                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
                        </div> <!-- end .contact-details -->

                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
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
                            <img src="img/logo.png" alt="logo">
                        </div>

                        <div class="footer-social wow fadeInUp">
                            <h3>We are social</h3>
                            <ul class="text-center list-inline">
                                <li><a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/r4xzR4"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/k9zAy5"><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        	</footer>

        <!--#SCRIPT, DONDE ESTAN LAS FUNCIONES-->    
            <script src="js/vendor/jquery-1.12.1.min.js"></script>
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
            <script src="include/ui-1.10.0/jquery.ui.core.min.js"></script>
            <script src="jquery.ui.timepicker.js?v=0.3.3"></script>

<script>

var myCenter=new google.maps.LatLng(parseFloat(Latitud_Gps),parseFloat(Longitud_Gps));

 var Marker_Real;            var Ruta_Historica = [];    var Posicion_Historica;     var Fecha_Inicio_PHP;       var Hora_Inicio_PHP;        
 var Marker_Historico=[];    var Ruta_Real = [];         var Posicion_Real;          var Fecha_Final_PHP;        var Hora_Final_PHP;         
 var Latitud;                var Fecha;                  var auxlat;                 var map;                    var NumMark;    
 var Longitud;               var Hora;                   var auxlon;                 var k;                      var Datos;
 var Latitudes_Historicas;   var Latitud_Historica;      var Fechas_Historicas;      var columnas;               var RealAgain=0;
 var Longitudes_Historicas;  var Longitud_Historica;     var Horas_Historicas;       var Tiempo;				 var CalSet=0;
 var Calendario1=1;
 var Calendario2=1;				       

 var PoliLinea_Real = new google.maps.Polyline({ path: Ruta_Real,   strokeColor: '#FFFF00',  strokeOpacity: 1.0,  strokeWeight: 5    });
 
 var PoliLinea_Historica = new google.maps.Polyline({ path: Ruta_Historica,  strokeColor: '#000000', strokeOpacity: 1.0, strokeWeight: 5 });

 var MarkerInterval = setInterval(function(){SetMarker()}, 1000);
 var DbInterval =     setInterval(function(){CargarDB()}, 1000);

 var mapOptions ={       center : myCenter,      zoom : 16,      mapTypeId: google.maps.MapTypeId.ROADMAP,    disableDefaultUI: false    };

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


function CargarDB(){    $('#result').load('ConsultaDB.php'); }

function SetMarker(){

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
                                icon: 'taxi2.png'
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
    
    RealAgain=0;
    PoliLinea_Historica.setMap(null);
    for (var l = 0; l <Marker_Historico.length; l++)    {   Marker_Historico[l].setMap(null);       }
    PoliLinea_Real.setMap(map);
    MarkerInterval = setInterval(function(){SetMarker()}, 1000);
    document.location.href='#service';
    }

function Consulta_Historico(){

    Fecha_Final_PHP = $('#Fecha_Final').DatePickerGetDate(true);
  
    Tiempo = new Date(2016,10,10,$('#Tiempo_Hora1').timepicker('getHour'),$('#Tiempo_Minuto1').timepicker('getMinute'),$('#Tiempo_Segundo1').timepicker('getMinute'));  
    Hora_Inicio_PHP=String(Tiempo).substring(16,24);

    Tiempo = new Date(2016,10,10,$('#Tiempo_Hora2').timepicker('getHour'),$('#Tiempo_Minuto2').timepicker('getMinute'),$('#Tiempo_Segundo2').timepicker('getMinute'));  
    Hora_Final_PHP=String(Tiempo).substring(16,24);
    
    $.post( "ConsultaDbHistorico.php", { FechaInicio: Fecha_Inicio_PHP, FechaFinal: Fecha_Final_PHP, 
                                   HoraInicio:  Hora_Inicio_PHP,  HoraFinal:  Hora_Final_PHP        }).done(

    function( data ) {  Decodificar(data);   });
    document.location.href='#service';

 }

function Decodificar(data){

    Marker_Real.setMap(null);
    PoliLinea_Real.setMap(null);
    PoliLinea_Historica.setMap(map);

    clearInterval(MarkerInterval);
    
    Datos=data;
    columnas=data.split("&");

    Latitudes_Historicas=columnas[0].substring(1,columnas[0].length-1).split(",");

    for (i = 0; i <Latitudes_Historicas.length; i++)     {  Latitudes_Historicas[i]=Latitudes_Historicas[i].substring(1,Latitudes_Historicas[i].length-1);  }

    Longitudes_Historicas=columnas[1].substring(1,columnas[1].length-1).split(",");

    for (i = 0; i <Longitudes_Historicas.length; i++) {     Longitudes_Historicas[i]=Longitudes_Historicas[i].substring(1,Longitudes_Historicas[i].length-1);    }

    Fechas_Historicas=columnas[2].substring(1,columnas[2].length-1).split(",");

    for (i = 0; i <Fechas_Historicas.length; i++) {     Fechas_Historicas[i]=Fechas_Historicas[i].substring(1,11);   }
    
    Horas_Historicas=columnas[3].substring(1,columnas[3].length-1).split(",");

    for (i = 0; i <Horas_Historicas.length; i++) {      Horas_Historicas[i]=Horas_Historicas[i].substring(1,9);  }

        k=0;
        NumMark=0;
    for(var i=0;i<Latitudes_Historicas.length;i++)
        {
            k++;

        Latitud_Historica = parseFloat(Latitudes_Historicas[i]);
        Longitud_Historica = parseFloat(Longitudes_Historicas[i]);
        Posicion_Historica=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);

        if (Latitud_Historica!=auxlat || Longitud_Historica!=auxlon ){  

        auxlat =Latitud_Historica;  auxlon =Longitud_Historica;

        Ruta_Historica.push(Posicion_Historica);   
        PoliLinea_Historica.setPath(Ruta_Historica);  

        Marker_Historico[NumMark]=new google.maps.Marker({  
                                    position:Posicion_Historica,        //animation:google.maps.Animation.DROP,
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
		console.log("catch");
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

</script>
</body>
</html>
