<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 10</title>
</head>
<body>
	<?php  

		$limite = 5;
		for ($i=1; $i <= $limite ; $i++) { 
			echo "<b>Tabla de $i</b>: ";
			$num = $i;
			for ($j=1; $j <=12 ; $j++) { 
				echo $num * $j . " -- ";
			}
			echo "<br>";
		}

	?>
</body>
</html>