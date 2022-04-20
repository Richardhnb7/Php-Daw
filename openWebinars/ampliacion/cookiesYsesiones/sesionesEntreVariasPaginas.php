<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //sesiones entre varias paginas 
    session_start();
    $_SESSION['iniciada']=true;
    $_SESSION['nombre']="richard";
    $_SESSION['edad']=24;
    
    echo "el identificador de la sesion es: ". session_id();
    echo"<br>";

    echo "el nombre de la sesion es: " . session_name();
    echo "<br>";
    echo "nombre: ". $_SESSION['nombre'];
    echo "<br>";
    echo "edad: " . $_SESSION['edad'];
    echo "<br>";
    echo "<a href='sesion3.php'> comprobar lso valores en otra web </a>";
    echo "<br>";
    echo "<a href='sesion4.php'> finaliza la sesion </a>";

    ?>
</body>

</html>