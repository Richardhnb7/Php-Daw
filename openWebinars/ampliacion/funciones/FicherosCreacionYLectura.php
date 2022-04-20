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
#fopen: sirbe para abrir ficheros 
        //r+ se abre con lectura y escritura
        $miarchivo=fopen("archivo1.txt","r+");
        if ($miarchivo == false) {
            echo "errror al abrir el fichero";
        }
        else {
#fread; sirbe para leer el fichero, hay que pasarle el puntero del archivo y el tamaño del archivo 
#filesize: sirve para el tamaño del archivo
            $contenido= fread($miarchivo,filesize("archivo1.txt"));
            echo $contenido;
            echo"<br>";
        }
        //w te lo sobrescribe y si no existe dicho fichero te lo crea
        $miarchivo2= fopen("archivo3.txt","w");
        $miarchivo3= fopen("archivo4.txt", "w");

#rewind: devuelve el puntero al principio
#feof: comprueba si el puntero est al final
#fgets: te devuelve una linea, es necesario el while para que se vaya recoriendo el fichero, sino solo te mostraria solo la pirmera linea
#fgetc: te devuelve un caracter 
        rewind($miarchivo);
        while (feof($miarchivo) == false ) {

            echo fgets($miarchivo) . "<br>";
        }

#file_get_contenst(). transmite el archivo completo a una cadena 
#file(): ransmite el archivo completo a un array
        $todo=file_get_contents("archivo1.txt");
        echo $todo;
        echo"<br>";

        $arrayA= file("archivo1.txt");
        var_dump($arrayA);

        

    ?>
    
</body>
</html>