<?php
require_once("clases.php");
require_once("bd.php");
$bd=abrir_bbdd();
session_start();


$j=0;
while ($j<=$i)
{
	
	$array_restaurante[$j]=$_SESSION['restaurante'.$j];
	$j++;
    
}


insertar_restaurante($array_restaurante,$bd)



?>