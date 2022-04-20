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
    /**
     * funciones para modificar contenido 
     * shif- eliminar el primer elmento del aray y devolverlo 
     * unshift añade un elemento al principio del arrayy 
     */
    $frutas=array("naranja","platano","manzana","pera","fresa");
    var_dump($frutas);
    echo "<br>";
/*
    $eliminado= array_shift($frutas);
    var_dump($eliminado);
    echo "<br>";
    var_dump($frutas);
    echo "<br>";

    $añadido=array_unshift($frutas, "mandarina");
    var_dump($añadido)
    var_dump($frutas);
    echo "<br>";
*/
    /**
     * pop-quita el ultimo elemento
     * push- añade uno mas elmentos al final del arry
     */

    $eliminado=array_pop($frutas);
    var_dump($eliminado);
    echo "<br>";
    var_dump($frutas);
    echo "<br>";

    array_push($frutas, "pomelo");
    var_dump($frutas);
    echo "<br>";


    ?>
</body>

</html>