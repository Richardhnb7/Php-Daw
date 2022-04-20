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

    var_dump($_FILES); 


//restricciones
    $directorioSubida= "uploads/";
    $max_file_size="512000";
    $extensionesValidas=array("jpg","png","gif");


    if (isset($_FILES['imagen'])) {
        $errores =0;
        $nombreArchivo= $_FILES['imagen']['name'];
        $filesize = $_FILES['imagen']['size'];
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        $tipoArchivo = $_FILES['imagen']['type'];
        $arrayArchivo= pathinfo($nombreArchivo);
        var_dump($arrayArchivo);
        $extension=$arrayArchivo['extension'];

        if (!in_array($extension, $extensionesValidas)) {
            echo "extension no valida";
            $errores=0;
        }
        if ($filesize >$max_file_size) {
            echo "la imagen excede el tamaño permitido";
            $errrores=1;
        }
        if ($errores ==0) {
            $nombreCompleto =$directorioSubida.$nombreArchivo;
            move_uploaded_file($directorioTemp,$nombreCompleto);
        }
    }
    ?>


    </form>
</body>
</html>