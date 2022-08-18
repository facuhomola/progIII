<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 7</title>
</head>
<body>
	<?php  

		function separa($texto){
			$aux = str_split($texto);
			$aux = implode("-", $aux);
			echo "Texto separado con '-': $aux";
		}

		$var = "Hola";
		echo "Texto recibido: $var <br>";
		separa($var);

	?>
</body>
</html>