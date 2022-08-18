<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 14b</title>
</head>
<body>
	<?php

		$checkboxhtml = array("gris","azul","rojo","verde");
		for ($i=0; $i < count($checkboxhtml); $i++) { 
			echo "<input type=checkbox value=$checkboxhtml[$i]>$checkboxhtml[$i] ";
		}

	?>
</body>
</html>