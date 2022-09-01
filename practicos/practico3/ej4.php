<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
</head>
<body>
	<style type="text/css">
		h3{
			color: red;
		}
		h2{
			background-color: darkblue;
			color: white;
			text-align: center;
		}
	</style>

	<h3>Formulario - Completar los campos</h3>
	<form action="ej4.php" method="POST">
		<b>Nombre y Apellido</b> <input type="text" name="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre'] ?>"><br><br>
		<b>Sexo</b> 
			<select name="sexo">
				<option value="f" value="<?php if(isset($_POST['sexo'])) echo $_POST['sexo'] ?>">Femenino</option>
				<option value="m" value="<?php if(isset($_POST['sexo'])) echo $_POST['sexo'] ?>">Masculino</option>
			</select> <br><br>
		<b>Edad</b> <input type="number" name="edad" min="0" max="100" value="<?php if(isset($_POST['edad'])) echo $_POST['edad'] ?>"><br><br>
		<input type="submit" name="botonenviar" value="Enviar">
		<input type="reset" name="botonreset" value="Limpiar">
	</form>

	<?php

	if (isset($_POST['botonenviar'])) {
		$edad = $_POST['edad'];
	
		if ($edad < 18) {
			echo "<h3>No se permite acceso al sitio para menores de edad</h3>";
		}else{
			$nombre = $_POST['nombre'];
			$sexo = $_POST['sexo'];
			if (strcmp($sexo, "f") == 0) {
				$saludo = "Bienvenida";
			}else{
				$saludo = "Bienvenido";
			}
			echo "<h2>$saludo $nombre :D</h2>";
		}
	}


	?>
</body>
</html>