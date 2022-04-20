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
//funcioness de redondeo de numeros
#round redondea con la presicion indicada
#ceil redondeo hacia arriba al siguiente numero entero
#floor redondeo hacia abajo al siguiente numero entero
        echo (round(0.60));
        echo "<br>";
        echo (round(0.50));
        echo "<br>";
        echo (round(0.49));
        echo "<br>";
        echo (round(-4.60));
        echo "<br>";
        echo (round(-4.49));
        echo "<br>";
        echo (round(4.96847,2));
        echo "<br>";

        echo (round(1.50,0,PHP_ROUND_HALF_UP));//
        echo "<br>";
        echo (round(1.50, 0, PHP_ROUND_HALF_DOWN)); //
        echo "<br>";
        echo (round(1.50, 0, PHP_ROUND_HALF_EVEN)); //
        echo "<br>";

    echo (ceil(0.60));
    echo "<br>";
    echo (ceil(5));
    echo "<br>";
    echo (ceil(5.1));
    echo "<br>";

    echo (floor(0.60));
    echo "<br>";
    echo (floor(5));
    echo "<br>";
    echo (floor(5.1));
    echo "<br>";

    ?>
</body>

</html>