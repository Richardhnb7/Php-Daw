<?php

	$cad="hola me llamo juanito";
	$token=" ";
	$arr1=explode($token, $cad);
	
	
	function mayor ($arr1){
		$indice=0;
		$largo=count($arr1);
		$pos=0;
		while($indice<$largo){
		
			$max="";
			if($arr1[$indice]>$max){ 
				$max=$arr1[$indice];
			}
		
		}
		return $pos-1;
		echo"La palabra mayor es $max";
	}

	$pos= mayor($arr1); //llamada a la funcion

	
	function intercambio(&$arr1,$pos){
		
		$aux=$arr1[$pos];
		$largo=count($arr1)-1;
		while ($pos<$largo){
			$arr1[$pos]=$arr1[$pos+1];
	
		}
		$arr1[$largo]=$aux;
		print_r($arr1);
		return $arr1;
	}
	
	$arr1=intercambio($arr1,$pos);
	//print_r($arr1);


	?>