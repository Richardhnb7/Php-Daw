<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
//sesiones entre varias paginas, aqui se solo reanuda la sesion anterior no crea una nueva
    session_start();

    if (isset($_SESSION['iniciada']) == true) {
        echo "el identificador de la sesion es: ". session_id();
        echo"<br>";

        echo "el nombre de la sesion es: " . session_name();
        echo "<br>";
        echo "nombre: ". $_SESSION['nombre'];
        echo "<br>";
        echo "edad: " . $_SESSION['edad'];
        echo "<br>";
        
    }else{

        echo "no se ha definido la sesion";
    }
    

    echo "<a href='sesionesEntreVariasPaginas.php'> volver a la pagina principal </a>";

    ?>
</body>

</html>