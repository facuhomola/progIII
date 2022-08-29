<?php 

	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$sexo = $_POST['sexo'];
	$profesion = $_POST['profesion'];
	$nacionalidad = $_POST['nacionalidad'];
	//$hobbies = $_POST['hobbies'];

	echo "<table border=3>";
		echo "<tr>"; 
			echo "<td><h3>Nombre y Apellido</h3></td>"; echo "<td>$nombre</td>";
		echo "</tr>";
		echo "<tr>"; 
			echo "<td><h3>Dirección</h3></td>"; echo "<td>$direccion</td>";
		echo "</tr>";
		echo "<tr>"; 
			echo "<td><h3>Teléfono</h3></td>"; echo "<td>$telefono</td>";
		echo "</tr>";
		echo "<tr>"; 
			echo "<td><h3>Sexo</h3></td>"; echo "<td>$sexo</td>";
		echo "</tr>";
		echo "<tr>"; 
			echo "<td><h3>Profesión</h3></td>"; echo "<td>$profesion</td>";
		echo "</tr>";
		echo "<tr>"; 
			echo "<td><h3>Nacionalidad</h3></td>"; echo "<td>$nacionalidad</td>";
		echo "</tr>";
	echo "</table>";


/*
	echo "<h3>Datos ingresados</h3>";
	echo "<b>Nombre y Apellido:</b> $nombre <br>"; 
	echo "<b>Dirección: </b> $direccion <br>"; 
	echo "<b>Teléfono:</b> $telefono <br>"; 
	echo "<b>Sexo:</b> $sexo <br>";
	echo "<b>Profesión:</b> $profesion <br>";  
	echo "<b>Hobbies: </b>";
	foreach ($_POST["hobbies"] as $hobbies => $item) {
		echo "$item  ";
	}
*/

?>