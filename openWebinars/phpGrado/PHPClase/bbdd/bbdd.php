<?php
    $codigo=$_POST['codigo'];//si fuera un en el formulario con el metodo GET se pondria aqui $_GET
    //$cadena_conexion= 'mysql:dbname=empresa;host=127.0.0.1';
    $cadena_conexion= 'mysql:host=127.0.0.1;dbname=usuarios';
    $usuario='root';
    $clave='';//no tiene contraseña por lo que no es necesario poner valores 
    try{
        $bd= new PDO($cadena_conexion,$usuario,$clave);//pdo una expresion paara acceder a la base de datos 

        echo "conexión realizada con éxito";
        //$sql="select nombre,clave,rol from usuarios where codigo=$codigo";
        $sql="SELECT nombre FROM clientes WHERE nombre=$codigo";
        $usuarios= $bd->query($sql);
        // echo $usuarios->rowCount(). "<br>";
        foreach($usuarios as $row){//aqui te muestra los campos de esa consulta 
            echo $row['nombre']. "<br>";
            //print $row['clave']. "<br>";
            //print $row['rol']. "<br>";
        }
    }catch(PDOException $e){
        echo "error con la base de datos: ". $e->getMessage();
    }

?>