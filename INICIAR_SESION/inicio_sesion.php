<?php
	session_start();
	if(isset($_SESSION['user'])){
	echo '<script> window.location="../mapa.php"; </script>';
	}
?>
<!DOCTYPE html>
<html>

<head>

	<link href="../css/inicio_sesion.css"=
      rel="stylesheet" type="text/css">
	<title>login Admin</title>
	<meta charset="utf-8">

</head>
<body BACKGROUND="fondo.png" >

	<div id="welcome">
		<h1 style="color:white"> Bienvenido a Ticoll </h1>
			<h4 style="color:white">Por favor inicie sesión</h4><br>
			<form method="post" action="validar.php">
				<h3 class="h1" style="color:white">Usuario</h3><input type="text" name="user" autocomplete="off" required><br>
				<h3 class="h1" style="color:white">Contraseña</h3><input type="password" name="pw" autocomplete="off" required><br><br><br>
				<input type="submit" class="btn btn-success" name="login" value="Ingresar">
			</form>
        
           
   </div>


</body>
</html>