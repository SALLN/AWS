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
    <script src="js/jquery-3.1.0.min.js"></script>
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
    <script src="js/markerwithlabel.js"></script>


    <!--<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerwithlabel/src/markerwithlabel.js"></script>-->

</head>

<body>

<style type="text/css">

table{

    border-spacing: 10px;
    border-collapse: collapse;
}

th,td,tr{

    border: 1px solid red;
    color: black;
    margin-top: 10px;
    font-weight: bold;
    padding: 5px 5px 2px 3px;
}

#pesos{

    background-color: white;
    border: 1px solid white;
}

.clapesos{

    text-align: center;
}

</style>


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

 <div class="container" style="margin-left:150px;">
    <div class="row">

        <div class="col-md-2 col-sm-12 wow fadeInLeft">
            <div class="media">
                <a href="#" class="pull-left">
                    <img src="images/longi.jpg" alt="Ruler">
                </a>
                <div class="media-body">
                    <h3>Latitud</h3>
                    <p id="fila_latitud">00.00000</p>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
            <div class="media">
                <a href="#" class="pull-left">
                    <img src="images/longi.jpg" alt="Ruler">
                </a>
                <div class="media-body">
                    <h3>Longitud</h3>
                    <p id="fila_longitud">-00.00000</p>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-sm-12 wow fadeInLeft">
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


        <div class="col-md-2 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="media">
                <a href="#" class="pull-left">
                    <img src="images/hora.jpg" alt="Ruler">
                </a>
                <div class="media-body">
                    <h3>Hora</h3>
                    <p id="fila_hora"> 00:00:00</p>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
            <div class="media">
                <a href="#" class="pull-left">
                    <img src="images/balanza2.jpg" alt="Ruler">
                </a>
                <div class="media-body">
                    <h3>Peso</h3>
                    <p id="peso">0kg</p>
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
 <input type ="button" id="Boton_grafica" value = 'Graficar tiempo real' onclick="promptForTwo(); return false;"/>

 <input type="button" id="Boton_Real24" value="Tiempo Real" onclick="Consulta_Real();">
 <p class="auto"><input type="text" id="autoc"/></p>

 <select id="seleccion" onChange="Centrar()"><option>Centrar Mapa</option></select>
 <input type="button" id="btHist" value="Historico" onclick="MostrarHistoricos()">

 <input type="button" id="Marcar_Recorrido" value="Marcar Recorrido" onclick="Marcar_Recorrido()">
<div id="ListaPesos"></div>
 <div id="ListaCheckBoxes">
 <input type="button" id="btAdd" value="Cargar Vehiculos" onclick="CargarVehiculos()"/>

 </div>


 <img id="Imagen" src="images/ajax-loader.gif">

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

<script src="js/CodigoMapa.js"></script>
</body>
</html>
