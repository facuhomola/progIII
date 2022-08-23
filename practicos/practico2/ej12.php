<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 12</title>
</head>
<body>
	<?php 

		$continentes = array(
			"Europa" => ["España", "Francia", "Inglaterra"],
			"America" => ["USA", "Canada", "Mexico"],
		);

		$paises = array(
			"España" => "Madrid",
			"Francia" => "Paris",
			"Inglaterra" => "Londres",
			"USA" => "Washington",
			"Canada" => "Toronto",
			"Mexico" => "Mexico",
		);

		echo "<table border=3>";
		$filas = count($paises);

		foreach ($continentes as $key => $value) {
			echo "<tr>";
			echo "<td rowspan=$filas>$key</td>";
				$aux = $value;
				for ($i=0; $i < count($aux) ; $i++) { 
					$pais = $aux[$i];
					echo "<tr>";
					echo "<td>$aux[$i]</td>";
					echo "<td>$paises[$pais]</td>";
					echo "</tr>";
				}
			echo "</tr>";
		}
		echo "</table>";

		/*CONSULTAR: rowspan*/

	?>
</body>
</html>
