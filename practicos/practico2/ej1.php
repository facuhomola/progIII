<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php
		$a = 15;
		$b = 94;
		$c = 73;
		if ($a > $b and $a > $c) {
		 	echo "El valor de $a";
		 }elseif ($b > $a and $b > $c) {
		 	echo "El valor de $b";
		 }else{
		 	echo "El valor de $c";
		 } 
	?>
</body>
</html>