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
     * varias funciones para arrays
     * 
    */
    $array = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");
    $elementos=count($array);
    echo $elementos;
    echo "<br>";

#currente te permite ver donde esta el puntero actual
    $actual= current($array);
    echo $actual;
    echo "<br>";

#mueve el puntero a la ultima posicion
    end($array);
    $actual = current($array);
    echo $actual;
    echo "<br>";

#reset devuelve el puntero al principio
    reset($array);
    $actual = current($array);
    echo $actual;
    echo "<br>";

#search te devuelve el key o la posicion
    $meses=array(0=>"enero",1=>"febrero",2=>"marzo",3=>"abril");
    $clave=array_search('febrero',$meses);

    if($clave){
        echo $clave ." ". $meses[$clave];
    }
    else{
        echo "Elemento no encontrado";
    }
    ?>
</body>

</html>