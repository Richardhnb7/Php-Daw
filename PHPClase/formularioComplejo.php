<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    if($_POST['usuario']=="usuario" && $_POST['clave']=="1234"){
        header("Location: principal.php");
    }else{
        $err=true;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if(isset($err)){
        echo "Has escrito mal el usuario y la contraseña <br>";
    }?>

    <form method="POST"
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
        <label for="usuario">Introduce el usuario</label>
        <input value="<?php if(isset($usuario)) echo $usuario;?>"
        id="usuario" name="usuario" type="text"> 
        <label for="contraseña">Introduce la contraseña</label>
        <input id="contraseña" type="password" name="clave">
        <input type="submit">
    </form>
    
</body>
</html>