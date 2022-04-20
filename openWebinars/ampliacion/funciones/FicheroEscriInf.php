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
//Escribir en los ficheros 
#fritw: escribe y devuelve los bytes escritos
#fflush. obliga a escribir los datos del bufffer en el archivo, acpsejable de usar

    $miarchivo= fopen("archivo3.txt", "a+");
    fwrite($miarchivo,"escribiendo dentro del fichero");
    fflush($miarchivo);
#stat: devuelve un array asociativo con info del archivo
#filesizeç: devuelve el tamaño del archivo 

    echo filesize("archivo3.txt");
    $arrayinfo=stat("archivo3.txt");
    var_dump($arrayinfo);

    ?>
</body>
</html>