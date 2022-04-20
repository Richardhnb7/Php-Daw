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
    $to = "richardhnb77@gmail.com";
    $subjet = "emaiil de confirmacion";
     $message= "fabkajsbfjkabsdfkjbdsfbdaskf";

     $from= "administrator@dominio.com";

    $headers= "from: $from";
    mail ($to,$subjet, $message ,$headers);

    echo "mail enviado";
//000webhost para poder hacer este ejercicio temdriamos que usar un host virtual

    ?>
</body>
</html>