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
//funcioness de formato de numeros
#  funciones para comprobar si es un entero o es un float
    $nota = 7.34;
    if(is_int($nota)) {
        echo"la nota es un entero";
    }
    elseif(is_float($nota)) {
        echo "la nota es un decimal";
    }
#number_format: da ujn formato a un numero
    echo"<br>";
    echo number_format("1000000");
    echo "<br>";

    echo number_format("1000000", 2);
    echo "<br>";

    echo number_format("1000000", 2, ",",".");//cambia el formato para los decimales
    echo "<br>";
    ?>
</body>

</html>