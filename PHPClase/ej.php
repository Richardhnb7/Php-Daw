<?php



echo "numero1: ".$_GET['numero1']. "<br>";
echo "numero2: ".$_GET['numero2']. "<br>";
echo "numero3: ".$_GET['numero3']. "<br>";

$a=$_GET['numero1'];
$b=$_GET['numero2'];
$c=$_GET['numero3'];

//cuadrado y suma
$cuadradoa=pow($a,2);
$cuadradob=pow($b,2);
$cuadradoc=pow($c,2);

$SumaCuadrados= $cuadradoa+$cuadradob+$cuadradoc;
echo "la suma de los cuadrados es $SumaCuadrados <br>";

//resta de los tres numeros

$resta= -$a-$b-$c;
echo "la resta de los números dados es $resta <br>";

//número mayor

if($a>$b){
    if($a>$c){
        echo "el numero mayor es el $a";
    }
}elseif ($b>$c) {
    echo "el numero mayor es $b";
}elseif ($c>$a) {
    echo "el numero  mayor es $c";
}




