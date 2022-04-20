<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $encontrado=false;
    $nombre = $_GET["nombre"];
    //conexion al servidor 
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $conexion = mysqli_connect($servidor, $usuario, $password) or die ("error de conexion");

    mysqli_select_db($conexion, "usuarios");

    $consultar = "SELECT nombre FROM clientes";

    $registros = mysqli_query($conexion, $consultar); 

    while ($registro = mysqli_fetch_row($registros)) { 
        echo "nombre: " . $registro[0]; 
        echo "<br>";
        if ($registro[0] == $nombre) { 
            $encontrado = true;
        }
    }
    if ($encontrado) {

        $sql ="DELETE FROM clientes WHERE nombre ='$nombre'";
        mysqli_query($conexion, $sql);
        echo "ha sido borrado de la BD";
    
    } else {
        echo " no ha sido borrado en la base de datos";
    }


    ?>
</body>