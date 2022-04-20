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
//Directorios
#chdir: cambia de directorio
#getcwd; devuelve el directorio actual
#scandir:: muestra o enumera en un array ficheros y directorios de ka ruta dada
    echo getcwd();
    $directorio = scandir(getcwd());
    var_dump($directorio);
    chdir('../');//te cambia al directorio anterior
    echo getcwd();
    ?>
</body>

</html>