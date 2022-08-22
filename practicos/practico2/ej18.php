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
			echo "<table border=3>";
			echo "<tr>";
			echo "<td><h3>Apellido</h3></td>";
			echo "<td><h3>Nombre</h3></td>";
			echo "<td><h3>DNI</h3></td>";
			echo "</tr>";
			foreach ($lista as $key => $value) {
				echo "<tr>";
				echo "<td>$value[0]</td>";
				echo "<td>$value[1]</td>";
				echo "<td>$value[2]</td>";
				echo "</tr>";
			}
			echo "</table>";
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
