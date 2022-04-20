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
        
        $nombre = $_GET["nombre"];

        $modificar =$_GET["seleccionar"];//aqui guarda el campo del desplegable 
        //conexion al servidor 
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $conexion = mysqli_connect($servidor, $usuario, $password) or die("error de conexion");

        mysqli_select_db($conexion, "usuarios");

        $sql="UPDATE clientes SET nombre ='$nombre' WHERE nombre ='$modificar'";
        mysqli_query($conexion, $sql);
        ?>
    </form>
</body>

</html>