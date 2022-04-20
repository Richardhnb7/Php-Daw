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
    $minombre =$_GET["nombre"];

    //conexion al servidor 
        $servidor="localhost";
        $usuario="root";
        $password="";
        $conexion= mysqli_connect($servidor,$usuario,$password) or die("error de conexion");
    //or die en vez de un if, que lo que hace es terminar la ejecucion del script

    mysqli_select_db($conexion, "usuarios");
         $insertar="INSERT clientes (nombre) VALUES('$minombre')";
        
        mysqli_query($conexion,$insertar);
        
        
    ?>
</body>
</html>