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
//creacion obtencion y eliminaccion de coockies
#cookie fragmento de texto o valor que se lamcena en nuestro ordenador que almacena nuestra informacion
#cookie de terceros 

#creacion de cookies hay que decir cuando expire
        setcookie("noexpira",1);
        setcookie("micookie",2, time() + 20);//cookie que expira en 20 seg

#obtener cookies
        setcookie("idioma","esp");

        if ($_COOKIE['idioma']=="esp") {
            echo "tu idioma es español";
        }

#eliminar cookie con dos opccion unset o time() - 20

        unset($_COOKIE['noexpira']);
        setcookie("noexpira","", time() -1);

    ?>
</body>
</html>