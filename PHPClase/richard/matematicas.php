<?php
//ecuacion de segundo grado
$a=4;
$b=20;
$c=2;

function ecuacion ($a,$b,$c){
    $valor=(pow($b,2))-(4*$a*$c);
    if($valor>=0){
        $raiz=sqrt($valor);
        $solucion1=(-$b+$raiz)/(2*$a);
        $solucion2=(-$b-$raiz)/(2*$a);
        $arr1[]=$solucion1;
        $arr1[]=$solucion2;
        return $arr1;
    }else{    
        return false;
    }
}
?>