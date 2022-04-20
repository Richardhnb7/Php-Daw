<?php

//Escribe una función para cada una de las funciones para probar las funciones del cuadro 2.6.

//funciones de variables
$var=6;
function inicializada ($var){
    $var2=isset($var);//tiene que dar true
    return $var2;
}

$var1=inicializada($var);
echo $var1;

function IsNull ($var){
    $var2=is_null($var); //da false
    return $var2;
}
$var1=IsNull($var);
echo $var1;

function NoInicializada ($var){
    $var2=empty($var); //tiene que dar false
    return $var2;
}
$var1=Noinicializada($var);
echo $var1;

function TipoDato ($var){
    $var2=is_int($var); // devuelve true
    return $var2;
}
$var1=TipoDato($var);
echo $var1;

function ObtenerOtroTipo ($var){
    $var2=intval($var); // da el valor de la nueva variable 
    return $var2;
}
$var1=ObtenerOtroTipo($var);
echo $var1;


//funciones de cadenas
$cad="hola soy juan";
$cad2="hola soy paula";
$array=["juan","maria","jose"];

function longitud ($cad){
    $lon=strlen($cad);//longitud
    return $lon;
}
$lon=longitud($cad);
echo $lon;

function DevArray ($cad){
    $arr=explode(" ",$cad); //devuelve array de cadenas
    return $arr;
}
$arr=DevArray($cad);
print_r($arr);

function DevCadena ($array){
    $cad3=simplode(" ", $array); //devuelve cadena de un array
    return $cad3;
}
$cad3=DevCadena($array);
echo $cad3;

function Comparar ($cad,$cad2){
    $cad3=strcmp($cad,$cad2); //0 si son iguales, -1 si la primera es menor, 1 si es mayor 
    return $cad3;
}
$cad3=Comparar($cad,$cad2);
echo $cad3;

function Mayusculas ($cad){
    $cad3=strtolower($cad); //Devuelve en mayusculas
    return $cad3;
}
$cad3=Mayusculas($cad);
echo $cad3;

function Minusculas ($cad){
    $cad3=strtoupper($cad); //devuelve en minusculas
    return $cad3;
}
$cad3=Minusculas($cad);
echo $cad3;

function Ocurrencias ($cad,$cad2){
    $cad3=str($cad,$cad2); //busca ocurrencia en la cad2, si la encuentra devuelve desde la ocurrencia, sino false
    return $cad3;
}
$cad3=Ocurrencias($cad,$cad2);
echo $cad3;


//funciones de arrays
$arr=[1,4,7,5];


function OrdenaAscendente ($arr){
    $arr2=ksort($arr);//ordena de forma ascendente
    return $arr2;
}
$arr2=OrdenaAscendente($arr);
print_r($arr2);

function OrdenDescendente ($arr){
    $arr2=krsort($arr);//ordena de forma descendente
    return $arr2;
}
$arr2=OrdenDescendente($arr);
print_r($arr2);


function Valores ($arr){
    $arr2=array_values($arr);//devuelve los valores
    return $arr2;
}
$arr2=Valores($arr);
print_r($arr2);


function Claves ($arr){
    $arr2=array_keys($arr);//devuelve las claves
    return $arr2;
}
$arr2=Claves($arr);
print_r($arr2);


function Contener ($arr){
    $bool=array_key_exists($arr, "f");//devuelve verdadero si contiene eso
    return $bool;
}
$bool=Contener($arr);
echo $bool;

function NumeroElementos ($arr){
    $cant=count($arr);//cuenta el numero de elementos del array
    return $cant;
}
$cant=NumeroElementos($arr);
echo $cant;