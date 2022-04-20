<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
//sesiones conceptos basicos 
#session_id: obtener o asignar una id
#session_name: obtener o asignar un nombre a la sesion
#PHPSESSID 
#session_start: inicia o reanuda una sesion asignando un id unico, va al princio

        session_id("22");
        echo session_name();
        session_start();

#variables de la sesison que se guardaran 

        $_SESSION['iniciada'] = true;
        $_SESSION['nombre'] = "richard";
        var_dump($_SESSION);

#destruir o eliminar la session y variables
        unset($_SESSION['nombre']);
        //session_unset('nombre');
        if (isset($_SESSION['nombre']) == false) {
            echo "la variable de la sesion nombre no existe";
        }
        session_destroy();
    ?>
</body>

</html>