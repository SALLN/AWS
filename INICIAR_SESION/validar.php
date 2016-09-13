<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include '../MySQL/ConexionMySQL.php';
			if(isset($_POST['login'])){
				$usuario = $_POST['user'];
				$pw = $_POST['pw'];
				$consulta = mysqli_query($conexion,"SELECT * FROM admin WHERE user='$usuario' AND pw='$pw'");
				if (mysqli_num_rows($consulta)>0) {
					$row = mysqli_fetch_array($consulta);
					$_SESSION["user"] = $row['user'];
				  	echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
					echo '<script> window.location="../mapa.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="inicio_sesion.php"; </script>';
				}
			}
            mysqli_free_result($consulta);
            mysqli_close($conexion);
		?>
</body>
</html>
