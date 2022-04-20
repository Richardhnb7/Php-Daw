<?php
	$tam = $_FILES["fichero"]["size"];//guarda el tamaño del fichero 
	if($tam > 256 *1024){
		echo "<br>Demasiado grande";
		return;
	}
	echo "Nombre del fichero: " . $_FILES["fichero"]["name"];//muestra el nombre del fichero
	echo "<br>Nombre temporal del fichero en el servidor: " . $_FILES["fichero"]["tmp_name"];	
	$res = move_uploaded_file($_FILES["fichero"]["tmp_name"],"subidos/" . $_FILES["fichero"]["name"]);
	//con move_iploaded_file mueve el fichero a una nueva ubicacion.
    if($res){
		echo "<br>Fichero guardado";
    } else {
        echo "<br>Error";
    }