<?php

try {
    $bd=new PDO($usuario,$clave);
    $consulta="select nombre,clave from usuarios where rol=1";
    $usuarios=$bd->query($consulta);
    
    foreach ($usuarios as $row){
    $nuevo_nombre=$row['nombre'];
    $nuevo_contraseña=$row['clave'];
    }
    if($nuevo_nombre=$nombre && $nuevo_contraseña=$contraseña){
        header("Location:administrador.php");
    }

}catch(PDOException $e){
    echo "error con la base de datos: ". $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="nombre">Dame tu nombre</label>
        <input value="<?php if(isset($nombre)) echo $nombre;?>"
        id="nombre" name="nombre" type="text">
        <label for="contraseña">dame tu contraseña</label>
        <input value="<?php if(isset($contraseña)) echo $contraseña;?>"
        id="contraseña" name="contraseña" type="password">
        <input type="submit">
    </form>
</body>
</html>