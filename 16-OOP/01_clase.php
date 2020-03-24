<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<?php 
	// Clase

	class VideoGame {

		//Atributos (Caracteristicas propias del objeto)

		public $name;       // Nombre del VideoJuego
		public $platform;  // Plataforma
		public $price;    // Precio
		public $year;    // Año de Lanzamiento

		// Métodos (Acciones-Lógica)

		public function setAttributes($name, $platform, $price, $year) {
			$this -> name     = $name;
			$this -> platform = $platform;
			$this -> price    = $price;
			$this -> year     = $year;
		}

		public function getAttributes() {
			return $this -> name." - ".
				   $this -> platform." - ".
				   $this -> price." - ". 
				   $this -> year;
		}

	}

	$vg1 = new VideoGame; // Crear el Objeto
	$vg1 ->setAttributes('pokemon Espada', 'Nitento Switch', 50, 2019);
	echo $vg1 ->getAttributes();

	echo "<hr>";

	$vg2 = new VideoGame; 
	$vg2 ->setAttributes('Mario Oddykey', 'Nitento Switch', 40, 2017);
	echo"El Nombre del Video Juego es:" .$vg2 ->name;


 ?>
</body>
</html>


