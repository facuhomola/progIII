<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 12</title>
</head>
<body>
	<?php 

		$miArreglo = array(
			"Europa" => [["España", "Madrid"], ["Francia", "Paris"], ["Reindo Unido", "Londres"]],
			"America" => [["EEUU", "Washington"], ["Canada", "Toronto"], ["Mexico", "Mexico"]],
		);

		echo "<table border=2>";
		foreach ($miArreglo as $key => $value) {
			echo "<tr>";
			echo "<td rowspan=4> $key</td>";
			for ($i=0; $i < count($value); $i++) { 
				echo "<tr>";
				$var = $value[$i];
				echo "<td>$var[0]</td>";
				echo "<td>$var[1]</td>";
				echo "</tr>";
			}
			echo "</tr>";
		}
		echo "</table>";


	?>
</body>
</html>