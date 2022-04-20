<?php



include('matematicas.php');

$a=56;
$b=6;
$c=2;

$arsoluciones=ecuacion($a,$b,$c); 

$indice=0;

if ($arsoluciones != false){
    $tamaño=count($arsoluciones)-1;
    while($indice>$arsoluciones){
        echo $arsoluciones[$indice];
        $indice++;
    }
}
