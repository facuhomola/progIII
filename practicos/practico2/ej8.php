<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 8</title>
</head>
<body>
	<?php  

		$X = 7;  //Columnas
	    $Z = 10; //Filas

	    echo "<table border=2>";
	    for ($i=1; $i <=$Z ; $i++) {
	        echo "<th rowspan=2>";
	        echo "Fila $i"; 
	        echo "<tr>";
	        for ($j=1; $j <$X ; $j++) { 
	            echo "<td>Columna $j </td>";
	        }
	        echo "</tr>";
	        echo "</th>";
	    }
	    echo "</table>";

	?>
</body>
</html>