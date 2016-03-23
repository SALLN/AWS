<?php
	session_start();
	if(isset($_SESSION['user'])){
	echo '<script> window.location="../CoordenadasGeograficas.php"; </script>';
	}
?>
<!DOCTYPE html>
<html>

<head>

	<link href="../css/inicio_sesion.css"
      rel="stylesheet" type="text/css">
	<title>login Admin</title>
	<meta charset="utf-8">

</head>
<body BACKGROUND="fondo16.jpg" >

	<div id="welcome">
		<h1 style="color:white"> Bienvenido a Ticoll </h1>
			<h4 style="color:white">Por favor inicie sesión</h4>
			<form method="post" action="validar.php">
				<h3 class="h1" style="color:white">Usuario</h3><input type="text" name="user" autocomplete="off" required><br><br>
				<h3 class="h1" style="color:white">Contraseña</h3><input type="password" name="pw" autocomplete="off" required><br><br><br>
				<input type="submit" class="btn btn-success" name="login" value="Ingresar">
			</form>
           <br><br><br>

            <input type ='button' value = 'Registrate aquí!' onclick="promptForTwo(); return false;"/> 
            <!--<a onClick="promptForTwo(); return false;" href="inicio_sesion.php">REGISTRATE AQUI!</a>-->

   </div>



<script type="text/javascript">



var userid = '';
var password = '';
var windowReference;

function promptForTwo() {
  var w = 480, h = 340;

  if (window.screen) {
    w = screen.availWidth;
    h = screen.availHeight;
  }

  var popW = 400, popH = 220;
  var leftPos = (w-popW)/2, topPos = (h-popH)/2;

  window.open('popup.htm','windowName','width=' + popW + ',height=' + popH + ',top=' + topPos + ',left=' + leftPos);


}

function done() {
  alert('userid = ' + userid + '\npassword = ' + password);

}


</script>

</body>
</html>