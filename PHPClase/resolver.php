<?php
include("funcion/funciones.php");
session_start();
$i=$_SESSION['indice'];
$numero=$_SESSION['entrada'];
//echo $i;
$j=0;
$SegundoContenido=array();
$contenido=array();
while ($j<=$i)
{
	
	$contenido[$j]= $_SESSION['numero'.$j];
    echo $contenido[$j]."<br>";
	$j++;
    
} 

while($j<=$numero){
	$SegundoContenido[$j]=$_SESSION["numero".$j];
	echo $SegundoContenido[$j]. "<br>";
	$j++;
}

$resultado=longitud_array($contenido);
echo "La longitud del array es $resultado <br>";

$VerOFal=existe_numero_array($numero,$contenido);
if($VerOFal==true){
	echo "el numero dado esta dentro del array <br>";
}else{
	echo "el numero dado no esta dentro del array <br>";
}


$media=media($contenido);
echo "la media de los datos dados es $media <br>";

$impares=impar($contenido);
print_r($impares);

session_destroy();
?>
