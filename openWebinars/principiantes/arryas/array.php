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
    //creacion de arrays
    $dias = array("lunes", "martes", "miercoles");
    $temperaturas = [23, 24, 34, 22];
    $vacio = array(15); #te creaa un array con 15 posiciones vacias

    //acceder a ellos o mostrarlos

    echo $dias[1];
    echo ("<br>");
    echo $temperaturas[0];
    echo ("<br>");
    var_dump($dias);
    echo ("<br>");
    var_dump($temperaturas);
    ?>
</body>

</html>