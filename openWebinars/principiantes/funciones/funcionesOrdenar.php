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
     *  funciones para ordenar arryas 
     * short()- actua sobre el array y 
     * para ordenar al reves rshort()
     */
    $array= array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
    var_dump($array);
    echo "<br>";
    //sort($array);
    //var_dump($array);
    //echo "<br>";
    //rsort($array);
    //var_dump($array);

    /**
     * funcion ashort ordena pero mantiene la asociacion de los key o los indices 
     * 
     */
    echo "<br>";
    asort($array);
    var_dump($array);

    /**
     * kshort ordena el array por sus indices, en este caso seria por los nombres
     * 
     */
    $nombres = array("Javier" => "29", "Alex" => "18", "Raul" => "40");

    var_dump($nombres);
    echo "<br>";
    ksort($nombres);
    var_dump($nombres);
    echo "<br>";
    

    /**
     * shuffle() crea un orden aleatorio de los elementos 
    */

    shuffle($array);
    var_dump($array);

    ?>
</body>

</html>