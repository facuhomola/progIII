<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 16</title>
</head>
<body>
	<?php 

		function checkboxhtml(){
			$numColores = func_num_args();
			echo "Cantidad de colores: " . $numColores . "<br>";
			for ($i=0; $i < $numColores; $i++) { 
				//echo "Color: " . func_get_arg($i);
				$color = func_get_arg($i);
				echo "<input type=checkbox value=$color>$color ";
			}
	
		}

		checkboxhtml("gris","azul","rojo","verde");

	?>
</body>
</html>