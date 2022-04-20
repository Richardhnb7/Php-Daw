<?php
    if (!isset($_GET['aceptar'])){
        $caducidad = time() + (60*60*24*365);
        setcookie("micookie","1",$caducidad);
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
#aceptar cookies
    if (!isset($_GET['aceptar']) && !isset($_COOKIE['micookie'])) {
    ?>
    
    <h2>cookies</h2>
    <p>debes aceptar las cookies para poder seguir navegando</p>
    <a href="?aceptar=1"> aceptar</a>
    /
    <?php
    }
    ?>
</body>

</html>