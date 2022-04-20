<?php
$arr= [
    0=>3,
    1=>8,
    2=>10,
    3=>15,
    4=>20,
    5=>33
];
$limite=12;
//funcion que te devuelve un array con los valores menores que el limite establecido
function menorquelimite($arr,$limite){
    $i=0;
    $max=count($arr)-1;
    while($i<$max){
        if($arr[$i]<$limite){
            $arrnuevo[]=$arr[$i];
        }
        $i++;
    }
    return $arrnuevo;
}

//le pasamos el limite y el array a comprobar
$arrnuevo=menorquelimite($arr,$limite); 
$i=0;
$max=count($arrnuevo)-1;
while($i<$arrnuevo){
    echo $arrnuevo[$i];
    $i++;
}