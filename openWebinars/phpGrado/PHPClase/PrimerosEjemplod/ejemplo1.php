
<?php
$entero=4;
$numero=4.5;
$cadena="cadena";
$bool=TRUE;

$a=5;
echo gettype($a);//muestra el tipo de dato de ese valor 
echo "<br>";
$a="Hola";
echo gettype($a);

//referencia y valor
$var1 = 100;
$var2 = &$var1; //paso por referencia
$var3 = $var1;
echo "$var2<br>";
$var2 = 300;
echo "$var1<br>";
$var3 = 400;
echo $var1;

//otro ejemplos
$var12 = 100;
$var13 = 100 + $var12;
echo "$var13 <br>";
$var13 = 100 * $var12;
echo "$var13<br>";
