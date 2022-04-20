<?php
//Escribe un script para resolver ecuaciones de segundo grado, ax2+bx+c=0. 
//Si la ecuación no tiene soluciones reales, hay que mostrar un mensaje de error.


$a=4;
$c=2;
$b=20;

$valor=(pow($b,2))-(4*$a*$c);


if($valor>=0){
    $raiz=sqrt($valor);
    $solucion1=(-$b+$raiz)/2*$a;
    $solucion2=(-$b-$raiz)/2*$a;

    echo "Las soluciones son $solucion1 y $solucion2";

}else{
    echo "Error: No existen soluciones";
}





