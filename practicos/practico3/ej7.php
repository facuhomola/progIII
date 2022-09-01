<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 7</title>
</head>
<body>
	<style type="text/css">
		h3{
			color: lightblue;
			font-size: 25px;
			padding: 1%;
			text-align: left;
			margin: 0;
		}
		form{
			border-color: blue;
			border: solid 1px;
			padding: 1%;
			width: 50%;
		}
	</style>

	<h3>Formulario simple</h3>

	<form action="ej3/resultados.php" method="POST" name="form">
		<b>Texto a buscar: </b><input type="text" name="texto">
		<p id="mensaje" style="color: red; font-size: 15px;"></p>
		<b>Buscar en: </b>
			<input type="radio" name="busca" value="0"> Titulos de canción
			<input type="radio" name="busca" value="1"> Nombres de album
			<input type="radio" name="busca" value="2"> Ambos campos 
		<br><br>
		<b>Género musical: </b>
			<select name="genero">
				<option value="Todos">Todos</option>
				<option value="Rock">Rock</option>
				<option value="Pop">Pop</option>
				<option value="Jazz">Jazz</option>
				<option value="Reggae">Reggae</option>
			</select> <br><br>
		<button type="button" onclick="validar();">Buscar</button>
	</form>

	<script type="text/javascript">
		function validar(){
			var texto = document.form.texto.value;
			if (texto.length == 0){
				document.getElementById("mensaje").innerHTML = "¡Debe introducir el texto de búsqueda!";
				return;
			}else{
				document.form.submit();
			}
		}
	</script>

</body>
</html>