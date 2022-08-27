<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

echo "Variables ingresadas: <b>$num1 -- $num2</b><br>";
echo "<table border=2>";
	echo "<tr>";
		echo "<td><h5>Operaciones</h5></td>";
		echo "<td><h5>Resultado</h5></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><b>Suma</b></td>";
		echo "<td>$num1 + $num2 = ", $num1 + $num2 , "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><b>Resta</b></td>";
		echo "<td>$num1 - $num2 = ", $num1 - $num2 , "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><b>Multiplicación</b></td>";
		echo "<td>$num1 * $num2 = ", $num1 * $num2 , "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><b>División</b></td>";
		if ($num2 == 0) {
			echo "<td>Error!</td>";
		}else{
			$num = floatval($num1 / $num2);
			echo "<td>$num1 / $num2 = ", $num , "</td>";
		}
	echo "</tr>";
 echo "</table>";
?>