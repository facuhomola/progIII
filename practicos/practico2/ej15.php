<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 15</title>
</head>
<body>
	<?php

		function checkboxhtml($cadena, $num=0){
			if ($num==0) {
				$aux = explode(',', $cadena);
				for ($i=0; $i < count($aux); $i++) { 
					echo "<input type=checkbox value=$aux[$i]>$aux[$i] ";
				}
			}else{
				$aux = explode(',', $cadena);
				for ($i=0; $i < count($aux); $i++) { 
					echo "<input type=radio name=color value=$aux[$i]>$aux[$i] ";
				}
			}
	
		}

		$cadena = "gris,azul,rojo,verde";
		echo "<b>Cadena con checkbox: </b>";
		checkboxhtml($cadena);
		echo "<br>";
		echo "<b>Cadena con radio: </b>";
		checkboxhtml($cadena, 1);

	?>
</body>
</html>