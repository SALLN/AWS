<?php
	session_start();
	include 'INICIAR_SESION/serv.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="coordenadasgeograficas.php"; </script>';
	}
?>
<!DOCTYPE html>
<html>
<link href="css/InicioSesion.css"
      rel="stylesheet" type="text/css">
<head>
	<title>login Admin</title>
	<meta charset="utf-8">

</head>
<body>

	<div id="welcome">
		<h1> Bienvenido a Ticoll </h1
			<h1 class="h1" style="color:white">Por favor inicie sesión</h1>
			<form method="post" action="INICIAR_SESION/validar.php">
				<h3 class="h1" style="color:Black">Usuario</h3><input type="text" class="form-control" name="user" autocomplete="off" required><br><br>
				<h3 class="h1" style="color:Black">Contraseña</h3><input type="password" class="form-control" name="pw" autocomplete="off" required><br><br>
				<input type="submit" class="btn btn-success" name="login" value="Ingresar">
			</form>
		</div>
</body>
</html>