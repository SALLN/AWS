<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>


        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <link rel=StyleSheet href="css/encabezado.css" type="text/css">
        <link rel="shortcut icon" href="taxi6.ico">

        <!-- Input datetime...............   -->

        <link rel="stylesheet" type="text/css" href="../src/DateTimePicker.css" />
    
        <script type="text/javascript" src="jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="../src/DateTimePicker.js"></script>




        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>Coordenadas Ticoll</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="css/responsive.css">
		
		
		<!-- Modernizer Script for old Browsers -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>


       <style type="text/css">
        
            p
            {
                margin-left: 20px;
            }
        
            input
            {
                width: 200px;
                padding: 10px;
                margin-left: 20px;
                margin-bottom: 20px;
            }
        
        </style>

		
    </head>
	



    <body>
    <div id="result"><?php include("ConsultaDB.php"); ?></div> 
        <!--
        Fixed Navigation
        ==================================== -->
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
                            <li><a href="#service">Mapa</a></li>
                            <li><a href="#contact">Contact</a></li>
                            
                            <!--<li><a href="#portfolio">portfolio</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#pricing">Pricing</a></li>-->
                            
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>

        

               </div>



         </header>


        <!--
        End Fixed Navigation
        ==================================== -->


        <!--
        Home Slider
        ==================================== -->
        <section id="home">     
            <div id="home-carousel" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                </ol>
                <!--/.carousel-indicators-->

                <div class="carousel-inner">

                    <div class="item active"  style="background-image: url('img/slider/bg1.jpeg')" >
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>HELLO WORLD! <br>WE ARE TICOLL</h2>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                            </div>
                        </div>
                    </div>              

                    <div class="item" style="background-image: url('img/slider/bg21.jpg')">                
                        <div class="carousel-caption">
                            <div class="animated bounceInDown">
                                <h2>HELLO WORLD! <br>WE ARE TICOLL</h2>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image: url('img/slider/bg3.jpg')">                 
                         <div class="carousel-caption">
                            <div class="animated bounceInUp">
                                <h2>HELLO WORLD! <br>WE ARE TICOLL</h2>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
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
        <!--
        End #home Slider
        ========================== -->

        
        <!--
        #Mapa
        ========================== -->
    <section id="service">

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
     


             <div>

                  <p>DateTime : </p>


                 <input type="text" data-field="datetime" readonly>
    
                  <div id="dtBox"></div>
            </div>



               <div id="googleMap"></div> 

            
                 <!-- end .row -->



            <!-- end .container -->

        </section>
        <!--
        End #Mapa
        ========================== -->

       


        <!--
        #contact
        ========================== -->
        <section id="contact">
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
        <!--
        End #contact
        ========================== -->

        <!--
        #footer
        ========================== -->
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
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->
        
        <!-- main jQuery -->
        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery.nav -->
        <script src="js/jquery.nav.js"></script>
        <!-- Portfolio Filtering -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Fancybox -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Parallax sections -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jQuery Appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- WOW script -->
        <script src="js/wow.min.js"></script>
        <!-- theme custom scripts -->
        <script src="js/main.js"></script>

      



<script>

var myCenter=new google.maps.LatLng(parseFloat(Latitud_Gps),parseFloat(Longitud_Gps));

var Marker_Real;            var Ruta_Historica = [];    var Posicion_Historica;     var Fecha_Inicio_PHP;       var Hora_Inicio_PHP;        
var Marker_Historico=[];    var Ruta_Real = [];         var Posicion_Real;          var Fecha_Final_PHP;        var Hora_Final_PHP;         
var Latitud;                var Fecha;                  var auxlat;                 var map;                    var NumMark;    
var Longitud;               var Hora;                   var auxlon;                 var k;

var columnas;
var Datos;
var Latitudes_Historicas;
var Longitudes_Historicas;
var Fechas_Historicas;
var Horas_Historicas;
var Latitud_Historica;
var Longitud_Historica;

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

    if (Latitud!=auxlat || Longitud!=auxlon ){
    
    if (Marker_Real != null) {        Marker_Real.setMap(null);        }

    auxlat =Latitud;    auxlon =Longitud;

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

    PoliLinea_Historica.setMap(null);
    for (var l = 0; l <Marker_Historico.length; l++)    {   Marker_Historico[l].setMap(null);       }

    PoliLinea_Real.setMap(map);

    MarkerInterval = setInterval(function(){SetMarker()}, 1000);
    }

function Consulta_Historico(){

    Fecha_Inicio_PHP = document.getElementById('Fecha_Inicio').value;
    Fecha_Final_PHP = document.getElementById('Fecha_Final').value;
    Hora_Inicio_PHP = document.getElementById('Hora_Inicio').value;
    Hora_Final_PHP = document.getElementById('Hora_Final').value;

    $.post( "ConsultaDbHistorico.php", { FechaInicio: Fecha_Inicio_PHP, FechaFinal: Fecha_Final_PHP, 
                                   HoraInicio:  Hora_Inicio_PHP,  HoraFinal:  Hora_Final_PHP        }).done(

    function( data ) {  Decodificar(data);   });

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

            } // fin funcion decodificar
 </script>


<script type="text/javascript">
        
            $(document).ready(function()
            {
                $("#dtBox").DateTimePicker();
            });
        
        </script>



</body>
</html>
