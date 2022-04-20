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
    /*
     * funciones de arrray, permiten intereactuar  y manipularlos
     * 
     * 
     * array_diff devuelve los elementoo del del array1 que no estan en el array2
     */
    $nun1= array (11,22,33);
    $nun2 = array(33, 44, 66);

    $colores = array("color1"=>"verde", "coloer2" => "azul", "color3" => "gris", "color4" => "rojo");
    $colores2 = array("color1" => "azul", "coloer2" => "blanco", "color3" => "verde");
      
    $diferencias= array_diff($nun1,$nun2);
    var_dump($diferencias);

    $diferencias2 = array_diff($colores, $colores2);
    echo "<br>";
    var_dump($diferencias2);

    /**
     * array merge permite unir arrays
     */
    $unir=array_merge($nun1,$nun2);
    var_dump($unir);
    ?>
</body>
</html>