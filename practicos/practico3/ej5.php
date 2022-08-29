<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>

	<style type="text/css">
		form{
			text-align: left;
			font-family: fantasy;
			font-size: 22px;
			background-color: darkblue;
			color: white;
			width: 65%;
			padding: 2%;
		}
		table{
			margin: 2%;
			font-family: monospace;
			background-color: lightblue;
		}
		table td{
			width: 350px;
			text-align: center;
		}
		table th{
			width: 350px;
			text-align: center;
			font-style: italic;
			background-color: #4DA6A6;
		}
		h5{
			color: red;
			font-size: 18px;
			margin: 2%;
			font-family: arial;
		}
		.btn{
			font-family: arial;
		  color: white;
		  font-size: 14px;
		  text-shadow: 1px 1px 0px #7CACDE;
		  box-shadow: 1px 1px 1px #BEE2F9;
		  padding: 10px 25px;
		  border-radius: 10px;
		  border: 2px solid #3866A3;
		  background: #63B8EE;
		  background: linear-gradient(to top, #63B8EE, #468CCF);		
		}
		.btn:hover{
			color: #14396A !important;
  			background: #468CCF;
  			background: linear-gradient(to top, #468CCF, #63B8EE);
		}
		h2{
			background-color: black;
			color: white;
			font-size: 25px;
			font-family: monospace;
			width: 65%;
			cursor: pointer;
			padding: 2%;
		}
		select{
			border-radius: 12px;
			border-style: none;
			font-size: 22px;
			font-family: sans-serif;
		}
	</style>

	<h2>Formulario de empleado - Completar los campos</h2>
	<form action="ej5.php" method="POST">
		<h4>Datos Personales</h4>
		Nombre y apellido *<input type="text" name="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre'] ?>"> <br><br>
		Correo Electrónico *<input type="mail" name="correo" value="<?php if(isset($_POST['correo'])) echo $_POST['correo'] ?>"> <br><br>
			<select name="sexo">
				<option value="0">Seleccione genero</option>
				<option value="f">Femenino</option>
				<option value="m">Masculino</option>
			</select> <br><br>
		dni <input type="number" name="dni" value="<?php if(isset($_POST['dni'])) echo $_POST['dni'] ?>"> <br><br>
		<h4>Sueldo</h4>
		<select name="salario">
			<option value="0">Seleccione salario bruto</option>
			<option value="1800">1800</option>
			<option value="2300">2300</option>
			<option value="2700">2700</option>
			<option value="3500">3500</option>
		</select> <br><br>

		<input class="btn" type="submit" name="btn-enviar" value="Enviar">
		<input class="btn" type="reset" name="reset" value="Limpiar">

	</form>


	<?php
		
		if (isset($_POST['btn-enviar'])) {
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$sexo = $_POST['sexo'];
			$dni = $_POST['dni'];
			if (!empty($nombre) and !empty($correo) and !empty($dni) and $_POST['salario'] != 0 ) {
				$salario = $_POST['salario'];
				$hExtra = ($salario * 0.5) / 100;
				$rFiscales = ($salario * 12) / 100;
				$sueldo = $salario - $rFiscales + $hExtra;
				echo "<table border=3>";
					echo "<tr>"; echo "<th colspan=2><h3>Datos del empleado</h3></th>"; echo "</tr>";
					echo "<tr>";
						echo "<td><h4>Nombre y apellido</h4></td>"; echo "<td>$nombre</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td><h4>Correo Electrónico</h4></td>"; echo "<td>$correo</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td><h4>Sexo</h4></td>"; echo "<td>$sexo</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td><h4>DNI</h4></td>"; echo "<td>$dni</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<th colspan=2><h3>Salario de empleado</h3></th>";
					echo "</tr>";
					echo "<tr>";
						echo "<td><h4>Salario Bruto</h4></td>"; echo "<td>\$$salario</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td><h4>Retenciones Fiscales</h4></td>"; echo "<td>\$$rFiscales</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td><h4>Pago de horas extras</h4></td>"; echo "<td>\$$hExtra</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td><h4>Sueldo Neto a cobrar</h4></td>"; echo "<td>\$$sueldo</td>";
					echo "</tr>";
				echo "</table>";
			}else{
				echo "<h5>Debe completar los campos solicitados(*) y seleccionar un salario bruto</h5>";
		}	
		}

		if (isset($_POST['reset'])) {
			$_POST['nombre'] = "";
			$_POST['correo'] = "";
			$_POST['dni'] = "";
			$_POST['sexo'] = "0";
			$_POST['salario'] = "0";
		}

	?>

</body>
</html>