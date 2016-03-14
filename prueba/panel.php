<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
</head>
<body>
<div>
  <article>
    <p> 
       asdfasdfasf fsdjfs
    </p>
  </article>
  <a href="logout.php"><button>Salir</button></a>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>