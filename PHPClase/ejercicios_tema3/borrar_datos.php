<?php


session_start();
$i = $_SESSION['indice'];
$j = 0;


while ($j <= $i) {
    $array_nombres[$j] = $_SESSION['nombre' . $j];
}

session_destroy();


try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);

    $consulta = 'delete from personas where nombre=?';
    $result = $bd->prepare($consulta);

    $num = count($array_nombres);
    $i = 0;

    while ($i <= $num) {
        $nombre = $array_nombres[$i];
        echo "has entrado";
        $result = $bd-> execute($nombre);
        echo "Has borrado los datos del nombre " . $nombre;
    }
    $bd->commit();
} catch (PDOException $e) {
    echo "error con la base de datos: " . $e->getMessage();
}
