<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 11</title>
</head>
<body>
	<?php

		function ordenar($arreglo){
	        $aux = $arreglo;
	        sort($aux);
	        return $aux;
	    }

	    function muestra($arreglo){
	        for ($i=0; $i < count($arreglo); $i++) {
	            echo $arreglo[i]; echo " "; 
	        }
	    }

	    $miArreglo = [14, 10, 20, 21, 7];

	?>
</body>
</html>