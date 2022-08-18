<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 9</title>
</head>
<body>
	<?php  

		$columnas = 4;
	    $filas = 3;

	    echo "<table border=3>";
	    
	    $i = 1;
	    $j = 1;

	    while( $i <= $filas){
	        echo "<tr>";
	        while ( $j <= $columnas ) {
	            echo "<td> Fila $i - Columna $j </td>";
	            $j++;
	        }
	        echo "</tr>";
	        $i++;
	        $j = 1;
	    }

	    echo "</table>";

	?>
</body>
</html>