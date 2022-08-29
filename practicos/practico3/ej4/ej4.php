<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej 4 - php</title>
</head>
<body>
	<style type="text/css">
		h3{
			color: red;
		}
		h2{
			background-color: darkblue;
			color: white;
			text-align: center;
		}
	</style>
</body>
</html>


<?php

	$edad = $_POST['edad'];
	
	if ($edad < 18) {
		echo "<h3>No se permite acceso al sitio para menores de edad</h3>";
	}else{
		$nombre = $_POST['nombre'];
		$sexo = $_POST['sexo'];
		if (strcmp($sexo, "f") == 0) {
			$saludo = "Bienvenida";
		}else{
			$saludo = "Bienvenido";
		}
		echo "<h2>$saludo $nombre :D</h2>";
	}

?>