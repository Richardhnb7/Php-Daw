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


//si en el formulario pusimos get pondremos get pero si pusimos post pondremos post

        var_dump($_FILES);

        $directorio= ini_get("upload_tmp_dir");//directorio es donde lo deja de forma intermedia
        echo $directorio;

        
        $directorioTemp=$_FILES['imagen']['tmp_name'];
        move_uploaded_file($directorioTemp,$_FILES['imagen']['name']);

    ?>


    </form>
</body>
</html>