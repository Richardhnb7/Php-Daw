<?php
	$var1 =4;
	$var2 =NULL;
	$var3 =FALSE;
	$var4 =0;
	echo "var1";
	var_dump(isset($var1));//True
	var_dump(is_null($var1));//false
	var_dump(empty($var1));//false
	echo "<br>";
	echo "var2";
	var_dump(isset($var2));//false
	var_dump(is_null($var2));//true
	var_dump(empty($var2));//true
	echo "<br>";
	echo "var3";
	var_dump(isset($var3));//true
	var_dump(is_null($var3));//false
	var_dump(empty($var3));//true
	echo "<br>";
	echo "var4";
	var_dump(empty($var4)); //True, el 0 como boolean es false
	echo "<br>";
	echo"unset";
	unset($var1);
	var_dump(isset($var1));//false
	echo "<br>";
	
	//esto lo que hace es convertir una cadena en un array
	$cad="hola me llamo juanito";
	$token=" ";
	$porcion=explode($token, $cad);
	echo $porcion[1];
	echo "<br>";
	
	//
	$array= array ("hola", "adios", "haslue");
	$separado= implode (",",$array);
	echo $separado;
	
