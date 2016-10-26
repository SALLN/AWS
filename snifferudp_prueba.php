<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
function flotante(tipo){

	if (tipo==1){
	//Si hacemos clic en abrir mostramos el fondo negro y el flotante
	$('#contenedor').show();
    $('#flotante').animate({
      marginTop: "-152px"
    });
	}
	if (tipo==2){
	//Si hacemos clic en cerrar, deslizamos el flotante hacia arriba
    $('#flotante').animate({
      marginTop: "-756px"
    });
	//Una vez ocultado el flotante cerramos el fondo negro
	setTimeout(function(){
	$('#contenedor').hide();

	},500)
	}

}
</script>
<style>
body {
	background:#CCC; font-family: 'Open Sans', sans-serif;
}
h1,h3 {
	text-align:center;
}
a {
	cursor:pointer;
}
#fondo {
	width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 990;opacity: 0.8;background:#000;
}
#flotante {
	z-index: 999; border: 8px solid #fff; margin-top: -756px; margin-left: -153px; top: 50%; left: 50%; padding: 12px; position: fixed; width: 265px; background-color: #fff; border-radius: 3px;
}
</style>

<h1>Ventana flotante animada con javascript y jquery</h1>
<h3><a onClick="flotante(1)">Abrir ventana</a></h3>

<div id="contenedor" style="display:none">

<div id="flotante"><h1>Ventana flotante y lo que quieras</h1>
<h3><a onClick="flotante(2)">Cerrar ventana</a></h3>
</div>

<div id="fondo"></div>

</div>
