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
    //la variable $_GET recoje los valores de las variables que se le ha pasado 
    echo "Nombre ". $_GET["nombre"]. "<br>";
    echo "Cargo ". $_GET["cargo"];
    ?>
</body>
</html>