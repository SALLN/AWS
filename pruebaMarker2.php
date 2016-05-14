<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
 </head>

<body>


<h1>Prueba para llenar DB</h1>

<div id="result"><?php include("pruebaMarker_new.php"); ?></div>

<script>
          
setInterval(function(){$('#result').load('pruebaMarker_new.php');},1000);
                
</script>

</body>
</html>
