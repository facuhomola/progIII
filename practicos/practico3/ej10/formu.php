<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 10</title>
</head>
<body>

	<style type="text/css">
		form{
			background-color: grey;
			padding: 2%;
			font-size: 14px;
			color: black;
			width: 50%;
		}
		.input-cuadros{
			width: 360px;
			height: 55px;
			margin-top: 1%;
			margin-bottom: 1%;
		}
	</style>

	<form method="POST" action="confirm.php">
		<h3>Formulario de inscripción</h3>
		Nombre completo <input class="input-cuadros" type="text" name="nombre" id="nombre"> <br>
		Dirección <input class="input-cuadros" type="text" name="direccion" id="direccion"> <br>
		Correo Electrónico <input class="input-cuadros" type="mail" name="correo" id="correo"> <br>
		Contraseña <input class="input-cuadros" type="pass" name="password" id="password"> <br>
		Fecha de nacimiento <input class="input-cuadros" type="date" name="fecha" id="fecha"> <br>
		Sexo  Masculino <input type="radio" name="sexo" id="sexo" value="Masculino"> -- Femenino <input type="radio" name="sexo" id="sexo" value="Femenino"> <br>
		Aficiones  <b>Deporte</b> <input type="checkbox" name="afi" value="Deportes"> -- <b>Musica</b> <input type="checkbox" name="afi" value="Musica"> -- <b>Cine</b> <input type="checkbox" name="afi" value="Cine"> <b>Videojuegos</b> <input type="checkbox" name="afi" value="Videojuegos"> -- <b>Lectura</b> <input type="checkbox" name="afi" value="Lectura"> <br>
		<button name="enviar" id="enviar">Enviar formulario</button>
	</form>
</body>
</html>