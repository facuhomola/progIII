<?php 

include 'conexion.php';

//Recibir datos y almacenarlos
$vueloOrigen = $_POST['vorigen'];
$vueloDestino = $_POST['vdestino'];
$fechaVuelo = $_POST['fechavuelo'];
$precio = $_POST['categoria'];
switch ($precio) {
	case '1':
		$precio = 30000;
		break;
	case '2':
		$precio = 50000;
		break;
	case '3':
		$precio = 65000;
		break;
	case '4':
		$precio = 20000;
		break;
	default:
		// code...
		break;
}

//Consulta para insertar
$insertar = "INSERT INTO vuelo(Origen, Destino, FechaPartida, Precio) VALUES ('$vueloOrigen', '$vueloDestino', '$fechaVuelo', '$precio')";

//Ejecuta consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo "Error al registrarse";
}else{
	echo "Vuelo registrado exitosamente <br><br>";
	echo "<h3>Vuelos registrados</h3>";
	$consulta = "SELECT * FROM vuelo";
	$resultado2 = mysqli_query($conexion, $consulta);
	if ($resultado2) {
		while ($row = $resultado2->fetch_array()) {
			$id = $row['IdVuelo'];
			$vueloorigen = $row['Origen'];
			$vuelodestino = $row['Destino'];
			$fecha = $row['FechaPartida'];
			$pre = $row['Precio'];
			echo "<b>Id: </b> $id <br>";
			echo "<b>Origen: </b> $vueloorigen <br>";
			echo "<b>Destino: </b> $vuelodestino <br>";
			echo "<b>Fecha: </b> $fecha <br>";
			echo "<b>Precio: </b> $pre <br>";
			echo "-------------------------------------- <br>";
		}
	}else{
		echo "Fallo la consulta";
	}
}

mysqli_close($conexion)

?>