<?php
require_once("clases.php");
require_once("sesiones.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['correo'] != "ninguno") {
        if (!isset($_SESSION['indice'])) {
            $i = 0;
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $pais = $_POST['pais'];
            $cp = $_POST['cp'];
            $ciudad = $_POST['ciudad'];
            $direccion = $_POST['direccion'];
            $rol = $_POST['rol'];
            $restaurante = new Restaurante($correo, $clave, $pais, $cp, $ciudad, $direccion, $rol);
            $_SESSION['restaurante' . $i] = $restaurante;
            $_SESSION['indice'] = $i;
        } else {
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $pais = $_POST['pais'];
            $cp = $_POST['cp'];
            $ciudad = $_POST['ciudad'];
            $direccion = $_POST['direccion'];
            $rol = $_POST['rol'];
            $restaurante = new Restaurante($correo, $clave, $pais, $cp, $ciudad, $direccion, $rol);
            $i = $_SESSION['indice'];
            $i++;
            $_SESSION['restaurante' . $i] = $restaurante;

            $_SESSION['indice'] = $i;
        }
    } else {
        header("Location: insertar_r.php");
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulario de login</title>
    <meta charset="UTF-8">
</head>

<body>

    <form action="" method="POST">
        <label for="correo">Correo</label> <br>
        <input value="<?php if (isset($correo)) echo $correo; ?>" id="correo" name="correo" type="text"> <br><br>
        <label for="clave">clave</label> <br>
        <input value="<?php if (isset($clave)) echo $clave; ?>" id="clave" name="clave" type="text"><br><br>
        <label for="pais">pais</label> <br>
        <input value="<?php if (isset($pais)) echo $pais; ?>" id="pais" name="pais" type="text"><br><br>
        <label for="cp">cp</label> <br>
        <input value="<?php if (isset($cp)) echo $cp; ?>" id="cp" name="cp" type="text"> <br><br>
        <label for="ciudad">ciudad</label> <br>
        <input value="<?php if (isset($ciudad)) echo $ciudad; ?>" id="ciudad" name="ciudad" type="text"><br><br>
        <label for="direccion">direccion</label> <br>
        <input value="<?php if (isset($direccion)) echo $direccion; ?>" id="direccion" name="direccion" type="text"><br><br>
        <label for="rol">rol</label> <br>
        <input value="<?php if (isset($rol)) echo $rol; ?>" id="rol" name="rol" type="text"> <br><br>



        <input type="submit">
    </form>
</body>

</html>