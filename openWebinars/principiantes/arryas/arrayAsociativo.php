

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //array asociativos
    $exploradores = array("explorador1" => "opera", "explorador2" => "safari", "explorador3" => "google");

    $datos = array("nombre" => "adrian", "edad" => 21, "profesor" => true, 3 => 100);

    echo "Exporador 3: " . $exploradores['explorador3'];

    echo "<br>";

    echo "nombre: ". $datos["nombre"];

    echo "<br>";

    echo "3 : ". $datos[3];

    var_dump($exploradores);
    var_dump($datos);
    ?>
</body>

</html>