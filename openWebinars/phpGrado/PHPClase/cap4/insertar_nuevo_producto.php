
<?php
require_once("clases.php");
require_once("bd.php");
$bd=abrir_bbdd();
session_start();


$j=0;



while ($j<=$i)
{
    $contenido[$j]=$_SESSION['nuevo_producto'.$j];
	$j++;
    
} 
 
modificar_producto($contenido,$bd);

?>