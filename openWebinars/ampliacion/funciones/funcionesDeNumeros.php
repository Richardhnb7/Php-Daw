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
//funcioness varias de numeros 
    
    echo (abs(-6.7));//valor absoluto
    echo"<br>";
    echo (max(4,5,7,8,9,10));
    echo "<br>";
    echo (min(4, 5, 7, 8, 9, 10));
    echo "<br>";
    echo (rand());//numero aleatorio
    echo "<br>";
    echo (rand(10,100)); //numero aleatorio comprendido entre esos dos numeros
    echo "<br>";
    echo (sqrt(9)); //raiz cuadrada
    echo "<br>";
    echo "<br>";

    echo decbin("3"); //transforma los numeros a binarios
    echo "<br>";
    echo decbin("21314");
    echo "<br>";
    echo dechex("10");//pasa de numero a hexadecimal
    echo "<br>";
    echo bindec("101101");//lo pasa de binario a decimal 
    echo "<br>";
    ?>
</body>

</html>