<?php
//dada una serie de numeros que metemos por teclado que te saque cual es el maximo y cual es el minimo

$entrada=array(10,6,8,9,1,3);
print_r($entrada); //muestra el array
$maximo=0;
$minimo=11;
$indice=0;
$cuenta=0; //variable para la longitud
$pos=0;

$cuenta=count($entrada); //esto nos da la longitud del array

while($indice<$cuenta){

	//sacamos maximo
	if($entrada[$indice]>$maximo){
		$maximo=$entrada[$indice];
	}
	
	//sacamos minimo	
	if($entrada[$indice]<$minimo){
		$minimo=$entrada[$indice];
	}
	
	//sacamos impares
	if($entrada[$indice]%2 !=0){
		echo "<br> los numeros impares son ".$entrada[$indice];
	}
	
	$indice=$indice+1;
}

echo"<br>el mayor es ". $maximo ." y el minimo es " .$minimo;


//sacar los numeros que estan en la posicion impar
$indice=0;
while($indice<$cuenta){
	
	if($indice%2!=0){
		echo "<br> el número ".$entrada[$indice]. " esta en la posición ".$indice." que es impar";
	}
	
	$indice++;
}

//sacar el dato que esta en medio

$pos=$entrada/2;
echo $pos;

?>
