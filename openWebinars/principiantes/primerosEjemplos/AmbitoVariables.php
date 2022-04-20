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
        // los ambitos de las variables pueden ser globales o locales 

        $numero=22;
        echo "nombre del servidor:" . $_SERVER['SERVER_NAME'] ;/*
            esto te muestra el nombre del servidor
        */
        echo"<p></p>";
        echo "software del servidor:" . $_SERVER['SERVER_SOFTWARE'];
        echo "<p></p>";
        echo "puerto  del servidor:" . $_SERVER['SERVER_PORT'];

    //la variable global almacena en ella todas las variables que he ido definiendo en mi codigo
    echo "<p></p>";
        echo "la variable numero vale: " . $GLOBALS['numero']

    ?>
</body>
</html>