<?php
require_once("Persona.php");
session_start();

$i=$_SESSION['indice'];
$j=0;

$contenido=array();


foreach($contenido as $clave=>$valor){
    echo $valor. "<br>";
}


session_destroy();

