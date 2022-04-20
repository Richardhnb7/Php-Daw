<?php
function repeticiones($array_palabra)
{
	$resultado=array_count_values($array_palabra);
	return $resultado;
}
function diferencia_array($p,$s)
{
	$resultado=array_diff($p,$s);
	return $resultado;
}
function dividir_array($array_palabra,$p)
{
	$resultado=array_chunk($array_palabra,$p);
	return $resultado;
}
function  comprobarlongitud3($p)
{
	$cierto=false;
	foreach ($p as $indice=>$valor)
	{
		if ($valor==3) 
		{
			$cierto=true;
			
		}
		
	}
	return $cierto;
}
function array_invertido($p)
{
	$invertir=array_reverse($p);
	return $invertir;
}
function impares($var)
{
	return ($var % 2 == 1);
}
function obtener_numeros_impares($p)
{
	$resultado=array_filter($p, "impares");
	return $resultado;
}
function pares($var)
{
	return ($var % 2 == 0);
}
function obtener_numeros_pares($p)
{
	$resultado=array_filter($p, "pares");
	return $resultado;
}
function comparar_arrays($p,$s)
{
	$resultado =array_merge($p,$s);
	return $resultado;
}
function cambiar_claves_valores($p)
{
	$resultado= array_flip ($p);
	return $resultado;
}
function cuadrado($var)
{
	return $var*$var;
}
function funcion_cuadrada_del_array($p)
{
	$cuadrados=array_map("cuadrado",$p);
	return $cuadrados;
	
}
function  ordenar_arrays(&$p)
{
	sort($p);
	
}
function inversa_pop(&$p)
{
	
	$resultado=array_pop($p);
	return $resultado;
}
function existe_indice($p,$s)
{
	$resultado=array_key_exists($s,$p);
	return $resultado;
}
function suprimir_elementos($p)
{
	$resultado=array_unique($p);
	return $resultado;
}

function longitud_array($array){
	$resultado=count($array)-1;
	return $resultado;
}

//dado un numero me diga si existe ese numero en el array

function existe_numero_array($numero, $array){
	$longitud=count($array);
	$indice=0;
	while($indice<$longitud && $numero!=$array[$indice]){
		$indice++;
	}
	if($indice<$longitud){
		return true; 
	}else{
		return false;
	}
}

function media($array){
	$longitud=count($array);
	$indice=0;
	$total=0;
	while($indice<$longitud){
		$total=$total+$array[$indice];
		$indice++;
	}
	$media=$total/$longitud;
	return $media;

}

//funcion para ver si existen valores iguales entre dos arrays
function existen_valores_array($f,$p){
	$longitud1=count($f);
	$longitud2=count($p);
	$indice=0;
	$indice2=0;
	$newarray= array();
	while($indice<$longitud1){
		if($f[$indice]==$p[$indice2]){
			$newarray[]=$f[$indice];
			$indice2++;
		}
		$indice++;
	}
}
//obtener los datos de aquellas posiciones que estan en las impares del array
function impar ($f){
	$longitud=count($f);
	$indice=0;
	$impar=array();
	while($indice<$longitud){
		if($indice%2!=0){
			$impar[]=$f[$indice];
		}
		$indice++;
	}
	return $impar;
}

?>