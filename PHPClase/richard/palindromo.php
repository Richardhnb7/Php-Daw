<?php


$cad="somos o no somos";


function intercambio ($cad){
    $token=" ";
    $reves=strrev($cad); 
    $arrpalabras=explode($token, $reves);

    return $arrpalabras;
}


$arrpalabras=intercambio($cad);


$pali= implode (" ",$arrpalabras);
echo $cad."<br>"; 
echo $pali."<br>";

$pali=str_replace(" ", "",$pali); 
$cad=str_replace(" ","",$cad);






