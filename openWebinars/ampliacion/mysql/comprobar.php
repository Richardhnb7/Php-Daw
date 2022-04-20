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
    $nombre = $_GET["nombre"];
    //conexion al servidor 
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $conexion = mysqli_connect($servidor, $usuario, $password);

    mysqli_select_db($conexion, "usuarios");

    $consultar = "SELECT nombre FROM clientes";

    $registros = mysqli_query($conexion, $consultar); //ejecuto la consulta y guardo el resultado en registros 

    while ($registro = mysqli_fetch_row($registros)) { //mientras haya registros continua
        echo "nombre: " . $registro[0]; //registro es un array, si tubiera mas se pondria otro numero en el indice 
        echo "<br>";
        if ($registro[0] == $nombre) { //si el registro actual es lo mismo que el usuario a escrito en el formulario
            //definiremos una nueva variable
            $encontrado = true;
        } else {
            $encontrado = false;
        }
    }
    if ($encontrado) {
        echo "ha sido encontrado en la base de datos ";
    } else {
        echo "este nombre no ha sido encontrado en la base de datos";
    }


    ?>
</body>

</html>