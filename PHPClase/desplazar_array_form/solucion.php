<?php
session_start();
include("funciones.php");
$i=$_SESSION['indice'];
$numero=$_SESSION['entrada'];
$j=0;
$desplazar=array();
$derecha=array();
$izquierda=array();

while ($j<=$i)
{
	
	$principal[$j]= $_SESSION['numero'.$j];
    //echo $principal[$j]."<br>";

    
} 
$j=0;

while($j<=$numero){
	$desplazar[$j]=$_SESSION["numero".$j];
	echo $desplazar[$j]. "<br>";
	
}

$derecha=desplazar_derecha($principal,$desplazar);
print_r($derecha);
//$izquierda=desplazar_izquierda($principal,$desplazar);
//print_r($izquierda);

session_destroy();
?>