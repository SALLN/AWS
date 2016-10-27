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
var Recargar_Vehiculos=true;    var hour; var min; var hour1; var min1; var peso;
var Tabla_Select=[];
var Icono_Historico =[];
var Distancia_Recorrida;
var Hide_Dist=true;
var Cont_Distancia=-1;
var Tabla_Distancias=[];
var Tabla_Distancia=[];
var Distancias_Recorridas=[];
var Cont_Geocode=0;
var Direcciones=[];
var Pesos=[];
var CercaDetectada=[];
var Intervalos;
var Pesos_Debidos=[];
var Pos_Actual;
var Cercas=0;
var Texto_txt=[];
var separador = "      ";
var VigilarInterval;
var Recorrido_Marcado=[];
var Saltos;
var vie;
var Colores={0:'red',1:'blue',2:'magenta',3:'coral',4:'green',5:'cyan',6:'darkgoldenrod',7:'darkorange',8:'darkslateblue'};
var Vig_Recorrido=true;
var Placa;
var InfoRuta;
var Lat_Ruta;
var Lng_Ruta;
var Dir_Ruta;
var Pes_Ruta;

//var phhhp = <?php echo "yee";?>;

//console.log(phhhp);


var apiKey = 'AIzaSyCF6NfbnvzeseQoQPP5Bh6iSHA3_fcHu1g';

var Select = document.getElementById("seleccion");

var myCenter=new google.maps.LatLng(parseFloat("10.95471"),parseFloat("-74.79636"));

var mapOptions ={
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center : myCenter,
                zoom : 16,
                disableDefaultUI: false    };

map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

map.controls[google.maps.ControlPosition.LEFT_CENTER].push( document.getElementById('Boton_grafica'));

map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('autoc'));


map.controls[google.maps.ControlPosition.LEFT_TOP].push(  document.getElementById('Marcar_Recorrido'));

map.controls[google.maps.ControlPosition.LEFT_TOP].push(  document.getElementById('Boton_Rutas'));

map.controls[google.maps.ControlPosition.LEFT_TOP].push( document.getElementById('Boton_Real24'));

map.controls[google.maps.ControlPosition.LEFT_TOP].push(  document.getElementById('btHist'));

map.controls[google.maps.ControlPosition.LEFT_TOP].push(  document.getElementById('Cerrar_Sesion'));


map.controls[google.maps.ControlPosition.LEFT_CENTER].push(  document.getElementById('ListaCheckBoxes'));

map.controls[google.maps.ControlPosition.TOP_CENTER].push(  document.getElementById('ListaPesos'));

map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('ListaPesos3'));

map.controls[google.maps.ControlPosition.TOP_CENTER].push(  document.getElementById('Imagen'));


var autocomplete = new google.maps.places.Autocomplete(    document.getElementById('autoc'));
autocomplete.bindTo('bounds', map);
autocomplete.addListener('place_changed', function() {
 var place = autocomplete.getPlace();
 if (place.geometry.viewport) {
       map.fitBounds(place.geometry.viewport);
       vie=place.geometry.viewport;
       var merk =new google.maps.Marker({
       position:new google.maps.LatLng(parseFloat(vie['f']['f']),parseFloat(vie['b']['b'])),
       map: map
       });

       var merk2 =new google.maps.Marker({
       position:new google.maps.LatLng(parseFloat(vie['f']['b']),parseFloat(vie['b']['f'])),
       map: map
       });


       console.log(place.geometry.viewport);    }
 else {       map.setCenter(place.geometry.location); console.log(place.geometry.location);       map.setZoom(16);    }
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


if(Cargo=="vehiculo"){
document.getElementById('Marcar_Recorrido').style.display='none';
document.getElementById('btHist').style.display='none';
document.getElementById('Boton_Real24').style.display='none';
document.getElementById('Boton_grafica').style.display='none';
}

var Peso_Vacio=false;
var Recorrido_o_Real=null;

function Marcar_Recorrido(){


        var texto_añadir=Obtener_Hora()+separador+"Inicio Crear Recorrido";

        Texto_txt.push(texto_añadir);        Texto_txt.push("\r\n");

        $.post("hora_servidor.php");

        map.addListener('click', function(e) {

        Recorrido_Marcado.push(new google.maps.LatLng(parseFloat(e.latLng.lat()),parseFloat(e.latLng.lng())));
        var texto_añadir=e.latLng.lat()+","+e.latLng.lng();

        Texto_txt.push(texto_añadir);        Texto_txt.push("\r\n");
        var center2 = new google.maps.LatLng(parseFloat(e.latLng.lat()),parseFloat(e.latLng.lng()));
        var draw_circle = new google.maps.Circle({ center: center2, radius: 20, strokeColor: "#FF0000", strokeOpacity: 1,
        strokeWeight: 0, fillColor: "#FF0000", fillOpacity: 0.2, map: map       });
        var draw_circle = new google.maps.Circle({center: center2, radius: 3, strokeColor: "#000000", strokeOpacity: 1,
        strokeWeight: 2, fillColor: "#000000", fillOpacity: 1, map: map            });
        });


        map.addListener("rightclick", function(e) {

            var texto_añadir=Obtener_Hora()+separador+"Recorrido Creado";

            Texto_txt.push(texto_añadir);            Texto_txt.push("\r\n");

            document.getElementById('Imagen').style.display='inline';
            map.setZoom(map.getZoom());

            MarkerInterval = setInterval(function(){Obtener_Direcciones()},300);

            google.maps.event.clearListeners(map, 'click');

            for (i in Recorrido_Marcado){
              new MarkerWithLabel({
                position: Recorrido_Marcado[i],
                map: map,
                raiseOnDrag: true,
                labelContent: i,
                labelAnchor: new google.maps.Point(17,9 ),
                labelClass: "labels",
                labelStyle: {opacity: 1},
                title:"Titulo",
                icon: {
                      path: google.maps.SymbolPath.CIRCLE,
                      scale: 10,
                      strokeColor: '#000000',
                      strokeWeight: 0,
                      fillColor: 'red',
                      fillOpacity:0  }
                });
              }

            google.maps.event.clearListeners(map, 'rightclick');

            $('#ListaPesos').append('</table> ');
            //var poli=new google.maps.Polyline({ path: Recorrido_Marcado,  strokeColor: '#FF0000',  strokeOpacity: 1.0,  strokeWeight: 5    });
            //       poli.setMap(map);

        });
         }
    var geocoder= new google.maps.Geocoder();

function SeleccionVehiculos(){

      if (Recorrido_o_Real=="Recorrido") {
        Marcar_Recorrido();
      }else if (Recorrido_o_Real=="Real") {
        Consulta_Real();
      }else if (Recorrido_o_Real=="Cargar") {
        CargarRecorrido();
      }
        flotante(2);
        LimpiarMapa();
        Recargar_Vehiculos=true;
        //MarkerInterval = setInterval(function(){SetMarkerVarios()}, 2000);
        //document.getElementById("Seleccionar").style.display = 'none';
        Solicitar_Despliegue=false;
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

        //for (i=0;i<Cont_CrearHTML;i++){ document.getElementById("Check"+i).style.display = 'none'; document.getElementById("H"+i).style.display = 'none';    }
        //SetMarkerVarios();
        //document.getElementById("ListaCheckBoxes").style.height ='1px';
     }

function flotante(tipo){
     	if (tipo==1){
     	//Si hacemos clic en abrir mostramos el fondo negro y el flotante
     	$('#contenedor2').show();
        $('#flotante').animate({           marginTop: "20%"         });
        Recorrido_o_Real="Recorrido";
        CargarVehiculos();
     	}
      if (tipo==3){
      //Si hacemos clic en abrir mostramos el fondo negro y el flotante
      $('#contenedor2').show();
        $('#flotante').animate({           marginTop: "20%"         });
        Recorrido_o_Real="Real";
        CargarVehiculos();
      }

      if (tipo==4){
      //Si hacemos clic en abrir mostramos el fondo negro y el flotante
      $('#contenedor2').show();
        $('#flotante').animate({           marginTop: "20%"         });
        Recorrido_o_Real="Cargar";
        console.log(Cargo);
        if (Cargo=="admin"){        CargarVehiculos(); }
        else{ CargarRecorrido();  }
      }
     	if (tipo==2){
      $('#flotante').animate({           marginTop: "-756px"         }); //Si hacemos clic en cerrar, deslizamos el flotante hacia arriba
     	setTimeout(function(){ 	$('#contenedor2').hide();     	},500); //Una vez ocultado el flotante cerramos el fondo negro
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

function CargarRecorrido(){

  var waypts = [];
  var orig;
  var desti;

if (Cargo=="admin"){  for (i in Checkes){  if (Checkes[i]){   Placa = Tabla_Usuarios[i].ID_VEHICULO  }    }    }
else{Vehiculo= Usuario};

  $.post("MySQL/Recorridos.php", {Modo: "Cargar", Vehiculo: Placa  }).done(
      function( data ) {
        console.log(Vehiculo);

        console.log(data);
        var Tabla_Recorrido =JSON.parse(data);

        var InfoRuta = Tabla_Recorrido[2].split("&");
        Lat_Ruta = InfoRuta[0].split("%");
        Lng_Ruta = InfoRuta[1].split("%");
        Dir_Ruta = InfoRuta[2].split("%");
        Pes_Ruta = InfoRuta[3].split("%");
        for (i in Lat_Ruta){

          new MarkerWithLabel({
            position: new google.maps.LatLng(parseFloat(Lat_Ruta[i]),parseFloat(Lng_Ruta[i])),
            map: map,
            raiseOnDrag: true,
            labelContent: i,
            labelAnchor: new google.maps.Point(17,9 ),
            labelClass: "labels",
            labelStyle: {opacity: 1},
            title:"Titulo",
            icon: {
                  path: google.maps.SymbolPath.CIRCLE,
                  scale: 10,
                  strokeColor: '#000000',
                  strokeWeight: 0,
                  fillColor: 'red',
                  fillOpacity:0  }
            });

          var center2 = new google.maps.LatLng(parseFloat(Lat_Ruta[i]),parseFloat(Lng_Ruta[i]));
          var draw_circle = new google.maps.Circle({ center: center2, radius: 20, strokeColor: "#FF0000", strokeOpacity: 1,
          strokeWeight: 0, fillColor: "#FF0000", fillOpacity: 0.2, map: map       });
          var draw_circle = new google.maps.Circle({center: center2, radius: 3, strokeColor: "#000000", strokeOpacity: 1,
          strokeWeight: 2, fillColor: "#000000", fillOpacity: 1, map: map            });


             if (i==0){    orig = Lat_Ruta[i]+","+Lng_Ruta[i];    }
             else if(i==Lat_Ruta.length-1){    desti = Lat_Ruta[i]+","+Lng_Ruta[i];    }
             else{  waypts.push({ location: Lat_Ruta[i]+","+Lng_Ruta[i],  stopover: true            }); }

                                 }

        var request = {
           origin: orig,
           destination: desti,
           waypoints: waypts,
           optimizeWaypoints: false,
           travelMode: google.maps.DirectionsTravelMode["DRIVING"],
           unitSystem: google.maps.DirectionsUnitSystem["METRIC"],
           provideRouteAlternatives: true
          };


    directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
           //directionsDisplay.setPanel($("#panel_ruta").get(0));
           respon=response['geocoded_waypoints'][0].place_id;
           directionsDisplay.setDirections(response);

    } else {        alert("No existen rutas entre ambos puntos");        }
    });
 CrearTabla_Ruta();
  }); // FIN CIERRE $.POST
 }

function GuardarPesos(){
    Peso_Vacio=false;
    //console.log("Guardar pesos");
    for (i in Direcciones){      if (document.getElementById("Peso"+i).value.length==0){ Peso_Vacio = true;}    }

    if (!Peso_Vacio){
    for (i in Direcciones){
        Pesos.push(document.getElementById("Peso"+i).value);

        if (i==0){ Pesos_Debidos.push(Pesos[0]-0); Pesos_Debidos.push(Pesos[0]-0);        }
        else{ Pesos_Debidos.push(Pesos_Debidos[i]-Pesos[i]);                   }
        CercaDetectada.push(true);
    }

    document.getElementById("ListaPesos").style.display = 'none';

    var Info_Recorrido_Lat = "";
    var Info_Recorrido_Lng = "";
    var Info_Recorrido_Pes = "";
    var Info_Recorrido_Dir = "";

    for (i in Direcciones){

      if(i!=Direcciones.length-1){
        Info_Recorrido_Lat = Info_Recorrido_Lat+Recorrido_Marcado[i].lat()+"%";
        Info_Recorrido_Lng = Info_Recorrido_Lng+Recorrido_Marcado[i].lng()+"%";
        Info_Recorrido_Dir = Info_Recorrido_Dir+Direcciones[i]+"%";
        Info_Recorrido_Pes = Info_Recorrido_Pes+Pesos[i]+"%";
      }else{
        Info_Recorrido_Lat = Info_Recorrido_Lat+Recorrido_Marcado[i].lat();
        Info_Recorrido_Lng = Info_Recorrido_Lng+Recorrido_Marcado[i].lng();
        Info_Recorrido_Dir = Info_Recorrido_Dir+Direcciones[i];
        Info_Recorrido_Pes = Info_Recorrido_Pes+Pesos[i];
              }
        var Info=Info_Recorrido_Lat+"&"+Info_Recorrido_Lng+"&"+Info_Recorrido_Dir+"&"+Info_Recorrido_Pes;

    //VigilarInterval = setInterval(function(){VigilarPesos()},1000);
 }
 for (i in Checkes){
      if (Checkes[i]){
        $.post("MySQL/Recorridos.php", {Modo: "Guardar", Usuario: Usuario, Vehiculo: Tabla_Usuarios[i].ID_VEHICULO, Recorrido: Info  }).done()  }
      }

 }else{alert("Casilla de peso vacía")}
}

function VigilarPesos(){

    Pos_Actual=new google.maps.LatLng(Latitud,Longitud);
        // DescargarTxt();
    for (i in Recorrido_Marcado) {

        var distancia = google.maps.geometry.spherical.computeDistanceBetween (Pos_Actual,Recorrido_Marcado[i]);
        if (distancia<20 && CercaDetectada[i]){
            Vig_Recorrido=false;

            console.log("CERCA DETECTADA: "+Cercas);
            //var texto_añadir=Obtener_Hora()+separador+"CERCA DETECTADA: "+Cercas;
            //Texto_txt.push(texto_añadir);
            //Texto_txt.push("\r\n");

            CercaDetectada[i]=false;
            if (peso>Pesos_Debidos[Cercas]-5 &&  peso<Pesos_Debidos[Cercas]+5){

                console.log("LLEGÓ CON PESO INDICADO AL PUNTO "+Cercas);
                var texto_añadir=Obtener_Hora()+separador+"Llegó con peso indicado al punto "+Cercas;
                Texto_txt.push(texto_añadir);
                Texto_txt.push("\r\n");
            }
            else{
                alert(" LLEGÓ PESO INCORRECTO"+Cercas);
                var texto_añadir=Obtener_Hora()+separador+"Llegó con peso incorrecto al punto "+Cercas;
                Texto_txt.push(texto_añadir);
                Texto_txt.push("\r\n");
                    }

            Intervalos=setInterval(function(){VigilarCarga_Punto()},1000);

        }
    }
     if (Vig_Recorrido){    /*console.log("RECORRIDO VIGILADO"); */
      if (peso>Pesos_Debidos[Cercas]-5 &&  peso<Pesos_Debidos[Cercas]+5){}else{alert("VARIACION DE PESO INDEBIDA")}
    }
 }

function VigilarCarga_Punto(){

    var distancia2 = google.maps.geometry.spherical.computeDistanceBetween (Pos_Actual,Recorrido_Marcado[Cercas]);

    if (distancia2>20){
              Cercas++;
              Vig_Recorrido=true;

        if (peso>Pesos_Debidos[Cercas]-5 &&  peso<Pesos_Debidos[Cercas]+5){

            console.log("SALIO CON PESO INDICADO: "+(Cercas-1));
            var texto_añadir=Obtener_Hora()+separador+"Salió con peso indicando del punto "+(Cercas-1);
            Texto_txt.push(texto_añadir);
            Texto_txt.push("\r\n");

        }

        else{

            alert(" SALIO CON PESO INCORRECTO: "+(Cercas-1));
            var texto_añadir=Obtener_Hora()+separador+"Salió con peso incorrecto del punto "+(Cercas-1);
            Texto_txt.push(texto_añadir);
            Texto_txt.push("\r\n");
        }


        if (Cercas==Pesos_Debidos.length-1){
            console.log("ULTIMO PUNTO");
            var texto_añadir=Obtener_Hora()+separador+"Recorrido terminado";
            Texto_txt.push(texto_añadir);
            Texto_txt.push("\r\n");
            DescargarTxt();
        }

        clearInterval(Intervalos);

                        }


            //$.post("correo.php", {asunto: "Este es el asunto", mensaje: "Este es el mensaje"  }).done(function( data ) {});



 }

function Obtener_Direcciones(){

     var direccion;

     geocoder.geocode({ 'latLng': Recorrido_Marcado[Cont_Geocode] }, function (results, status) {

         if (status == google.maps.GeocoderStatus.OK) {
             direccion = results[0].formatted_address;
             var direccion2 = direccion.split(",");
             Direcciones.push(direccion2[0]);
             Cont_Geocode++;
         }
     });


     if(Cont_Geocode==Recorrido_Marcado.length){
         clearInterval(MarkerInterval);
         CrearTabla();
     }
  }

  var directionsDisplay = new google.maps.DirectionsRenderer();
     directionsDisplay.setOptions( { suppressMarkers: true,
                                     polylineOptions: {
                                     strokeWeight: 6,
                                     strokeOpacity: 1,
                                     strokeColor:  'red'
                                     }} );
     var directionsService = new google.maps.DirectionsService();
     directionsDisplay.setMap(map);
  var respon;

function CrearTabla(){

  var waypts = [];
  var orig;
  var desti;
  for (i in Direcciones){

     if (i==0){    orig = Recorrido_Marcado[i].lat()+","+Recorrido_Marcado[i].lng();    }
     else if(i==Direcciones.length-1){    desti = Recorrido_Marcado[i].lat()+","+Recorrido_Marcado[i].lng();    }
     else{  waypts.push({ location: Recorrido_Marcado[i].lat()+","+Recorrido_Marcado[i].lng(),  stopover: true            }); }
    }

      var request = {
         origin: orig,
         destination: desti,
         waypoints: waypts,
         optimizeWaypoints: false,
         travelMode: google.maps.DirectionsTravelMode["DRIVING"],
         unitSystem: google.maps.DirectionsUnitSystem["METRIC"],
         provideRouteAlternatives: true
        };


  directionsService.route(request, function(response, status) {
     if (status == google.maps.DirectionsStatus.OK) {
         //directionsDisplay.setPanel($("#panel_ruta").get(0));
         respon=response['geocoded_waypoints'][0].place_id;
         directionsDisplay.setDirections(response);
  } else {        alert("No existen rutas entre ambos puntos");        }
  });

     $('#ListaPesos').append('<table style="border: 1px solid white;"> ');
     $('#ListaPesos').append('<tr><td> PUNTO   </td><td>  DIRECCION  </td><td>  PESO  </td> </tr>');

     for (i in Direcciones){
         $('#ListaPesos').append('<tr><td>'+i+'</td></td><td><input style="background-color:#D7D7D7; border: 1px solid transparent;" id=Peso value="'+Direcciones[i]+'"></input></td><td class="editpesos"><input style="background-color:#D7D7D7;border: 1px solid transparent;" id=Peso'+i
         +' class=clapesos placeholder="Ingresar peso"></input> </td> </tr>');
     }

     $('#ListaPesos').append('<input type=button onclick="GuardarPesos()" id="Seleccionar2" value=Guardar />');
     $('#ListaPesos').append('</table> ');
     document.getElementById('Imagen').style.display='none';
     map.setZoom(map.getZoom());
  }

function CerrarListaPesos(){
  document.getElementById('ListaPesos').style.display='none';
  document.getElementById('ListaPesos3').style.display='none';
}

function CrearTabla_Ruta(){
  document.getElementById('ListaPesos3').style.display='inline';
  $('#ListaPesos2').remove();
  var Tabla_Pesos = document.createElement("div");
  Tabla_Pesos.id = "ListaPesos2";
  $('#ListaPesos3').append(Tabla_Pesos);
  $('#ListaPesos2').append('<h5 style="color:black;margin-left:210px;border: 1px solid transparent; cursor:pointer;" onClick=CerrarListaPesos(); >X</h5>');

  $('#ListaPesos2').append('<table style="border: 1px solid white;"> ');
  $('#ListaPesos2').append('<tr><td> PUNTO   </td><td>  DIRECCION  </td><td>  PESO  </td> </tr>');

  for (i in Dir_Ruta){
      $('#ListaPesos2').append('<tr><td>'+i+'</td></td><td>'+Dir_Ruta[i]+'</td><td>'+Pes_Ruta[i]+'</td> </tr>');
  }
  $('#ListaPesos2').append('</table> ');
  document.getElementById('Imagen').style.display='none';
  map.setZoom(map.getZoom());
}

function DescargarTxt(){

 var contenido = new Blob(Texto_txt, {        type: 'text/plain'    });

    var reader = new FileReader();
    reader.onload = function (event) {
        var save = document.createElement('a');
        save.href = event.target.result;
        save.target = '_blank';
        save.download = 'Recorrido.txt' || 'archivo.dat';
        var clicEvent = new MouseEvent('click', {
            'view': window,
                'bubbles': true,
                'cancelable': true
        });
        save.dispatchEvent(clicEvent);
        (window.URL || window.webkitURL).revokeObjectURL(save.href);
    };
    reader.readAsDataURL(contenido);

 }

function Centrar2(){    setInterval(function(){Centrar2()}, 500);     }

function Centrar(){

    for (i in Tabla_Usuarios){
        Mapa_Centrado=true;
        if(Tabla_Usuarios[i].ID_VEHICULO==document.getElementById('seleccion').value){map.setCenter(Posicion[i]); Seleccionado=i;}
    }
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

    var divSubmit = document.createElement('div');
    var lista23 = document.getElementById("ListaCheckBoxes");
    document.getElementById("flotante").appendChild(lista23);
    //$('#flotante').after(divSubmit);
    $(divSubmit).append('<input type=button onclick="SeleccionVehiculos()" id="Seleccionar" value=Seleccionar />');
    $('#ListaCheckBoxes').after(divSubmit);
 }

        Checkes[Cont_CrearHTML]=false;
        var texto=Tabla_Usuarios[Cont_CrearHTML].ID_VEHICULO;
        var divSubmit = $(document.createElement('div'));

        $(divSubmit).append('<input type=checkbox onclick="Checkes['+Cont_CrearHTML+']=!Checkes['+Cont_CrearHTML+'];" id=Check'+Cont_CrearHTML+' style=position:absolute;margin-left:-30px;cursor:pointer;/>'+'<h5 id=H'+Cont_CrearHTML+' style=position:absolute;color:black;cursor:default;margin-left:-14px;margin-top:1px;>'+texto+'</h5>');

        Cont_CrearHTML++;
        $('#ListaCheckBoxes').after("<br>");
        $('#ListaCheckBoxes').after(divSubmit);
        $('#ListaCheckBoxes').after("<br>");
    } else{

        document.getElementById("Seleccionar").style.display = 'inline';
        for (i=0;i<Cont_CrearHTML;i++){ document.getElementById("Check"+i).style.display = 'inline'; document.getElementById("H"+i).style.display = 'inline';    }
    }
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
                    peso=Tabla2[Cont_Join++].LATITUD;
                    Posicion[i]=new google.maps.LatLng(Latitud,Longitud);

                    if (Mapa_Centrado && Seleccionado==i){

                        document.getElementById('fila_latitud').innerHTML  = Latitud;
                        document.getElementById('fila_fecha').innerHTML    = Fecha_Hora.substring(0,10); document.getElementById('fila_longitud').innerHTML = Longitud;
                        document.getElementById('fila_hora').innerHTML     = Fecha_Hora.substring(11,19); document.getElementById('peso').innerHTML= peso+"kg";
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

    document.getElementById('seleccion').style.display='inline-block'; map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('seleccion'));
    document.getElementById('fila_latitud').style.display='inline-block'; map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('fila_latitud'));
    document.getElementById('fila_longitud').style.display='inline-block'; map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('fila_longitud'));
    document.getElementById('fila_fecha').style.display='inline-block'; map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('fila_fecha'));
    document.getElementById('fila_hora').style.display='inline-block'; map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('fila_hora'));
    document.getElementById('peso').style.display='inline-block'; map.controls[google.maps.ControlPosition.RIGHT_TOP].push(  document.getElementById('peso'));

    for (i in PoliLinea_Real)        {   PoliLinea_Real[i].setMap(map); RealAgain[i]=0;       }
    clearInterval(MarkerInterval);
    MarkerInterval = setInterval(function(){SetMarkerVarios()}, 500);
 }

function Consulta_Hora_Marker(){
    Saltos=document.getElementById('Saltos').value;
    console.log(Saltos);
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
        var Num_Markers = 0;
         if (Tabla_Historico[Cont_Historico].length==0){

             alert("La consulta del ID: " + Tabla_Usuarios[Cont_Historico].ID_VEHICULO + ", está vacia");
         }else{

        PoliLinea_Historica[Cont_Historico].setMap(map);
        for(i in Tabla_Historico[Cont_Historico]){
            Num_Markers = parseInt(i)+1;
            Latitud_Historica = parseFloat(Tabla_Historico[Cont_Historico][i].LATITUD);
            Longitud_Historica = parseFloat(Tabla_Historico[Cont_Historico][i].LONGITUD);
            Posicion[Cont_Historico]=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);
            peso=parseFloat(Tabla_Historico[Cont_Historico][i].PESO_TOTAL)
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
                title: Num_Markers+" -- "+Tabla_Historico[Cont_Historico][i].FECHA_HORA+" -- "+peso+"kg",
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
                title: Num_Markers+" -- "+Tabla_Historico[Cont_Historico][i].FECHA_HORA+" -- "+peso+"kg",
                icon: Icono_Historico[Cont_Historico]
                });
            }else{
                if (i%Saltos==0){
                Marker_Hora_Marker[Cont_Historico][Cont_Markers++]=new google.maps.Marker({
                position:Posicion[Cont_Historico],
                map: map,
                title: Num_Markers+" -- "+Tabla_Historico[Cont_Historico][i].FECHA_HORA+" -- "+peso+"kg",
                icon: Icono_Historico[Cont_Historico]
                });
                      }
                         }
                            }
                              }

        Consulta_Hora_Marker_Graficar();
        promptForHist();
          });
    }else{           Consulta_Hora_Marker_Graficar();             }
   }
    //if(Cont_Historico==Tabla_Usuarios.length-1){    Distancia_KM();    /*Historico_Snap();*/    }
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

     google.maps.event.clearListeners(map,'click');

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

    $.post("MySQL/Marker_Hora_fecha.php", {FechaFinal: Fecha_Final_PHP, FechaInicio: Fecha_Inicio_PHP,HoraInicio: Hora_Inicio_PHP,  HoraFinal: Hora_Final_PHP , LatitudMarker: LatMarker_Hora, LongitudMarker: LonMarker_Hora, Metros:  Metros_Redonda, Vehiculo: Tabla_Usuarios[Cont_Historico].ID_VEHICULO   }).done(

    function( data ) {

     Tabla = JSON.parse(data);



     Cont_Markers=0;
     for(i in Tabla)
        {

            Latitud_Historica = parseFloat(Tabla[i].LATITUD);
            Longitud_Historica = parseFloat(Tabla[i].LONGITUD);
            Posicion[Cont_Historico]=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);
            peso=parseFloat(Tabla[i].PESO_TOTAL);
            Marker_Marker_Hora[Cont_Historico][Cont_Markers++]=new google.maps.Marker({
            position:Posicion[Cont_Historico],
            map: map,
            title: Tabla[i].FECHA_HORA+" --- "+peso+"kg",
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
    if (Tabla.length==0){alert("El vehículo no ha transitado en esta zona.")}
    Cont_Markers=0;
    for(i in Tabla)
    {
    Latitud_Historica = parseFloat(Tabla[i].LATITUD);
    Longitud_Historica = parseFloat(Tabla[i].LONGITUD);
    Posicion[Cont_Historico]=new google.maps.LatLng(Latitud_Historica,Longitud_Historica);
    peso=parseFloat(Tabla[i].PESO_TOTAL);

    Marker_Marker_Hora[Cont_Historico][Cont_Markers++]=new google.maps.Marker({
                        position:Posicion[Cont_Historico],
                        map: map,
                        title: Tabla[i].FECHA_HORA+" --- "+peso+"kg",
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

 //Fecha_Inicio_PHP='2016-05-16';
 //Fecha_Final_PHP='2016-05-16';
 //Hora_Inicio_PHP='01:22:00';
 //Hora_Final_PHP='01:24:00';


  }

function MostrarDistancia(){

    Hide_Dist=false;
    document.getElementById("MenuDistancia").style="animation-duration:2s;animation-name:bounceInRight;";
    document.getElementById("MenuDistancia").style.display = 'inline-block';
    ObtenerDateTime();
    Distancia_KM();

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
    //document.getElementById("divmenu").style="animation-duration:2s;animation-name:bounceInRight;";
    //document.getElementById("divmenu").style.display = 'inline-block';
    $('#contenedor2').show();
      $('#divmenu').animate({           marginTop: "15%" ,marginLeft:"35%"         });
 }

function OcultarHistoricos(){
        if (!Hide_Hist){
        //document.getElementById("divmenu").style="animation-duration:1s;animation-name:Steven;";
        //document.getElementById("divmenu").style.display = 'inline-block';
        //setTimeout(function(){ document.getElementById("divmenu").style.display = 'none'; }, 800);
        $('#divmenu').animate({           marginTop: "-756px"         }); //Si hacemos clic en cerrar, deslizamos el flotante hacia arriba
        setTimeout(function(){ 	$('#contenedor2').hide();     	},500); //Una vez ocultado el flotante cerramos el fondo negro

        }
        Hide_Hist=true;
         }

function Mostrar_Calendario1(){

    	if (Calendario1==1){
		Calendario1=0;
	    $('#Fecha_Inicio').DatePicker({

	     flat: true,
	     date:  '',
	     current: '2016-08-16',
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
    			document.getElementById('Fecha_Inicio2').innerHTML  = Fecha_Inicio_PHP;   }
                    }
                                });
                                 }
                                  }

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
    current: '2016-08-16',
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
    graph.showValues = 1; // 0:% only   -  1: abs & %   -   2:abs only    - ninguno
    graph.barWidth = 15; // ANCHO DE LAS BARRAS
    graph.barLength = 2; // LARGO DE LAS BARRAS
    graph.labelSize = 20;// SIZE NOMBRES
    graph.absValuesSize = 20;// SIZE VALORES
    graph.percValuesSize = 0;
    graph.graphPadding = 5;
    graph.graphBGColor = '#00c7fc';
    graph.graphBorder = '5px solid #00c7fc';
    graph.barColors = 'green';
    graph.barBGColor = 'white';
    graph.barBorder = '2px solid black';
    graph.labelColor = 'black';
    graph.labelBGColor = 'white';
    graph.labelBorder = '2px solid black';
    graph.absValuesColor = 'black';
    graph.absValuesBGColor = 'white';
    graph.absValuesBorder = '2px solid black';
    document.getElementById('divGraph').innerHTML = graph.create();

    var izqmarg = 661 - document.getElementById('MenuDistancia').clientWidth;
    document.getElementById('MenuDistancia').style.marginLeft =  izqmarg + "px";

 }

function Obtener_Hora(){

    var today=new Date();

    var h=today.getHours();         if(h < 10) h ="0"+h;
    var m=today.getMinutes();       if(m < 10) m ="0"+m;
    var s=today.getSeconds();       if(s < 10) s ="0"+s;
    var me = today.getMonth()+1;    if(me < 10) me ="0"+me;
    var year=today.getFullYear();
    var day=today.getDate();
    var fecha_serv=year+"-"+me+"-"+day+" "+h+":"+m+":"+s;
 return fecha_serv;
}

function promptForTwo() {
   var a = document.createElement("a");
   a.target = "_blank";
   a.href = "http://ticollcloud.ddns.net/AWS/Grafica_TiempoReal.html";
   a.click();
  }

function promptForHist() {
   var a = document.createElement("a");
   a.target = "_blank";
   a.href = "http://ticollcloud.ddns.net/AWS/Grafica_Historico.html?fechainicio="+Fecha_Inicio_PHP+"_"+Hora_Inicio_PHP+"&fechafinal="+Fecha_Final_PHP+"_"+Hora_Final_PHP;
   a.click();
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

function CerrarSesion(){
  var a = document.createElement("a");
  a.href = "http://ticollcloud.ddns.net/AWS/INICIAR_SESION/logout.php";
  a.click();
}
