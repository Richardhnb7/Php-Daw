<?php
require_once('persona.php');
session_start();
$i = $_SESSION['indice'];
$j = 0;
$contenido = array();



$fich = fopen("fichero.txt", "rw");
if ($fich === FALSE) {
	echo "NO se encuentra el fichero para meter información <br>";
} else {
	echo "se ha encontrado el fichero <br>";

	foreach ($contenido as $clave) {
		$dni = $valor->getdni();
		$nombre = $valor->getnombre();
		$apellido = $valor->getapellido();

		$res = file_put_contents("fichero.txt", "$dni $nombre $apellido");
	}
}

if ($res) {
	echo "fichero creado con exito <br>";
} else {
	echo "error al crear fichero <br>";
}


if ($fich === FALSE) {
	echo "No se encuentra el fichero para entraer información <br>";
} else {
	while (!feof($fich)) {
		$per = fscanf($fich, "%d %s %s");
		echo "$per[0] $per[1] $per[2] <br>";
		$persona = new Persona($per[0], $per[1], $per[2]);
	}
}
print_r($array_perso);
rewind($fich);



fclose();
session_destroy();
