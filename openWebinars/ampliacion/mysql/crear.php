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

    //creacion de una base de datos 
        $servidor="localhost";
        $usuario="root";
        $password="";
        $conexion= mysqli_connect($servidor,$usuario,$password);
        if (!$conexion) {
            echo "conexion fallida";
        }else{
            $sql = "CREATE DATABASE usuarios";
            if(mysqli_query($conexion,$sql)){//COMPRUEBA SI SE HA CREADO LA TABLA
                echo"Bd creada";
            }
            else{
                echo"error ". mysqli_error($conexion);//mueestra el ul
            }

            //primero establecemos la conexion y despues selecinamos la bd
            mysqli_select_db($conexion,"usuarios");
            $sql2=" CREATE TABLE clientes(nombre VARCHAR(20))";
            if (mysqli_query($conexion, $sql2)) {
                echo "TABLA creada";
            }
        }
    ?>
</body>
</html>