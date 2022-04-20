<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //sesiones entre varias paginas, pagina de fin de sesion 
    session_start();
    if (isset($_SESSION['iniciada'])==true) {
        session_unset();//esto liberaria todas las variables
        session_destroy();
    } else {

        echo "no se ha definido la sesion";
    }


    echo "<a href='sesionesEntreVariasPaginas.php'> volver a la pagina principal </a>";

    ?>
</body>

</html>