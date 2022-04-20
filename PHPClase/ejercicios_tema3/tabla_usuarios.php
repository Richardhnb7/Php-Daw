<?php
$cadena_conexion='mysql:dbname=empresa;host=127.0.0.1';
$usuario='paula';
$clave='contraseña';
/*
    $usuario='root';
    $clave='';
 */
try {
    $bd=new PDO($cadena_conexion,$usuario,$clave);
    $consulta="select codigo,nombre,clave,rol from usuarios";
    $usuarios=$bd->query($consulta);

    echo"
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse:collapse;
        }
    </style>
    ";
    
    echo"
        <table>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Clave</th>
                <th>Rol</th>
            </tr>
            ";
    foreach ($usuarios as $row){
        echo "
            <tr>
                <td >".$row['codigo']."</td>
                <td >".$row['nombre']."</td>
                <td>".$row['clave']."</td>
                <td>".$row['rol']."</td>
            </tr>
        ";
    }
    echo"</table>";

}catch(PDOException $e){
    echo "error con la base de datos: ". $e->getMessage();
}
?>