<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="actualizar.php" method="get">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <?php
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $conexion = mysqli_connect($servidor, $usuario, $password) or die("error de conexion");

        mysqli_select_db($conexion, "usuarios");

        $consultar = "SELECT nombre FROM clientes";

        $registros = mysqli_query($conexion, $consultar);

        echo "<label for='seleccionar'>elige un nombre: </label>";

        echo "<select name='seleccionar' id='seleccionar'>";

        while ($registro = mysqli_fetch_row($registros)) {

            echo "<option value='$registro[0]'>" . $registro[0] . "</option>";
        }
        echo "</select>";
        ?>

        <p>
            <input type="submit" value="actualizar">
        </p>
    </form>
</body>

</html>