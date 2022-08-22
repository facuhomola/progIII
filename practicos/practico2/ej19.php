<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 19</title>
</head>
<body>
	<?php

		function bidimensional($arreglo){
			foreach ($arreglo as $key => $value) {
				$arrBi[] = [$key, $value];  
			}
			return $arrBi;
		}

		function imprime($tabla){
			echo "<table border=3>";
			echo "<tr>";
			echo "<td><h4>CLAVES</h4></td>";
			for ($i=0; $i < count($tabla); $i++) {
				$clave = $tabla[$i][0]; 
				echo "<td>$clave</td>";
			}
			echo "</tr>";
			echo "<tr>";
			echo "<td><h4>VALORES</h4></td>";
			for ($i=0; $i < count($tabla); $i++) { 
				$valor = $tabla[$i][1];
				echo "<td>$valor</td>";
			}
			echo "</table>";
		}

		$usuarios = array(
			"user1" => "pato123",
			"user22" => "Argentina98",
			"userG" => "milanesa20",
			"facus" => "programacionIII",
			"user3" => "buenDia",
			"usuario10" => "hola1234",  
		);

		$nuevoArr = bidimensional($usuarios);
		imprime($nuevoArr);

	?>
</body>
</html>