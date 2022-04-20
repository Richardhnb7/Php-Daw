<?php 
/*comprueba que el usuario haya abierto sesión o redirige*/
require_once 'sesiones.php';
require_once 'bd.php';
// comprobar_sesion();
$bd=abrir_bbdd();

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $unidades=$_POST['unidades'];
	$cod=$_POST['cod'];

}


	if(isset($_SESSION['carrito'][$cod])){
		$_SESSION['carrito'][$cod] += $unidades;
	}else{
		$_SESSION['carrito'][$cod] = $unidades;		
	}
	header("Location: carrito.php");
