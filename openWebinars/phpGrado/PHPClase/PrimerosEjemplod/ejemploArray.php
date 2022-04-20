<?php

	$arr1= [
		0=>444,
		1=>222,
		2=>333,
	];
	print_r($arr1);
	echo "<br>". "pos 0:". $arr1[0]. "<br>";
	$arr1[0]=555;
	print_r($arr1);
	echo "<br>";
	$arr2= array (
		"1111A" => "Juan Vera Ochoa",
		"1112A" => "Maria Mesa Cabeza",
		"1113A" => " Ana Puertas Peral",
	);
	print_r($arr2);
	echo "<br>";
	
	foreach($arr2 as $codigo=>$nombre){
		echo"Codigo: $codigo Nombre: $nombre <br>";
	}
	
	foreach($arr2 as $valor){
		echo" Nombre: $valor <br>";
	}
	$arr2["1113A"] = "Ana Puertas Segundo";
	
	print_r($arr2);
	echo "<br>";
	
	$arr3=array(
		"Juan" => "Vera Ochoa",
		"Maria" => "Mesa Cabeza",
		"Ana" => "Puertas Peral",
	);
	
	foreach($arr3 as $codigo=>$nombre){
		echo "Nombre: $codigo Apellido: $nombre <br>";
	}
	
	
	//no modifica el array
	foreach ($arr1 as $cantidad){
		$cantidad=$cantidad*2;
	}
	print_r($arr1);
	echo "<br>";
	//modifica el array
	
	foreach ($arr1 as &$cantidad){
		$cantidad=$cantidad*2;
	}
	print_r($arr1);
	echo "<br>";
	
?>
