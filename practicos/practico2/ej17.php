<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 17</title>
</head>
<body>
	<?php

		$urls = array(
			"arr1" => ["https://images4.alphacoders.com/588/thumb-1920-588080.png", 600, 350],
			"arr2" => ["https://images6.alphacoders.com/591/591158.jpg", 450, 220],
			"arr3" => ["https://i.pinimg.com/736x/ed/fa/df/edfadfc9dc4f2d5e6c55443fc2eec91f.jpg", 690, 485],
		);


		foreach ($urls as $key => $value) {
			echo "<img src=$value[0] width=$value[1] height=$value[2]> <br><br>";
		}

	?>
</body>
</html>