<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 14</title>
</head>
<body>
	<?php  

		$texto = "Complejo Quinta Resort se encuentra ubicado a tan sólo 25 calles de la plaza principal
		de Merlo. La Quinta es un emprendimiento familiar, atendido por sus dueños, cuyo
		único objetivo es brindarles a todos sus pasajeros un ambiente amigable y permitirles
		gozar de la naturaleza y la paz de las sierras. El ZZZ cuenta con cabañas con capacidad
		hasta 8 personas las cuales se encuentra completamente equipadas, posee Split,
		Calefactores y hogar; TV por cable. Además el ZZZ tiene 5 cabañas, Boysen, Cassis,
		Fresa, Corinto y Mora: las capacidades de las cabañas varían, van desde la capacidad
		máxima de 4 personas hasta 8. Todas ellas cuentan con Baño privado, split en las
		habitaciones, calefactor, cocina comedor; servicio de TV por cable, Conexión para
		Internet T10 y DSL, teléfono DDN y DDI.";

		$cantCaracteres = strlen($texto);
		$cantOraciones = substr_count($texto, '.');
		$cantLetra = substr_count($texto, 'a');
		echo "$texto<br><br>";
		echo "<b>Cantidad de caracteres: </b>$cantCaracteres<br>";
		echo "<b>Cantidad de oraciones: </b>$cantOraciones<br>";
		echo "<b>Cantidad de palabras con la letra 'a': </b>$cantLetra<br>";
		echo str_replace("ZZZ", "complejo Z", $texto);


	?>
</body>
</html>