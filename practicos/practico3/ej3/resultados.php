<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3 - Resultados</title>
</head>
<body>

	<style type="text/css">
		h3{
			color: lightblue;
			font-size: 25px;
			padding: 1%;
			text-align: left;
			margin: 0;
		}
	</style>

	<?php

		$texto = $_POST['texto'];
		$busca = $_POST['busca'];
		switch ($busca) {
			case '0':
				$busca = "Todos";
				break;
			case '1':
				$busca = "Titulos de canción";
				break;
			case '2':
				$busca = "Nombres de album";
				break;
			default:
				// code...
				break;
		}
		$genero = $_POST['genero'];

		echo "<h3>Formulario simple. Resultados del formulario</h3>";
		echo "<ul>";
			echo "<li><b>Texto de busqueda: </b> $texto</li>";
			echo "<li><b>Buscar: </b> $busca</li>";
			echo "<li><b>Género: </b> $genero</li>";			
		echo "</ul>"; 
		echo "<br><br>";
		echo "<a href=buscar.html>Nueva búsqueda</a>";
	?>

</body>
</html>