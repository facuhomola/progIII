<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 14b</title>
</head>
<body>
	<?php

		function checkboxhtml($cadena){
			$aux = explode(',', $cadena);
			for ($i=0; $i < count($aux); $i++) { 
				echo "<input type=checkbox value=$aux[$i]>$aux[$i] ";
			}
	
		}

		$cadena = "gris,azul,rojo,verde";
		checkboxhtml($cadena);
		
	?>
</body>
</html>
