<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 18</title>
</head>
<body>
	<?php 

		function imprime($lista){
			echo "<h3>Lista de personas anotadas: </h3>";
			foreach ($lista as $key => $value) {
				echo "<b>Apellido</b>: $value[0]  ";
				echo "<b>Nombre</b>: $value[1]  ";
				echo "<b>DNI</b>: $value[2]  ";
				echo "<br><br>";
			}
		}

		$listPersonas = array(
			"persona1" => ["Homola", "Facundo", 390213231],
			"persona2" => ["Sanchez", "Silvia", 14421323],
			"persona3" => ["Homola", "Raul", 1314132344],
			"persona4" => ["Homola", "Rauly", 32441321],
			"persona5" => ["Homola Azorena", "Geronimo", 60121212],
		);

		imprime($listPersonas); //en una tabla html xd

	?>
</body>
</html>