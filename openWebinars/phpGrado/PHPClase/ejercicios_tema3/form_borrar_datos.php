<?php
session_start();
/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['nombre'] != "ninguno") {
        if (!isset($_SESSION['indice'])) {

            $_SESSION['nombre' . $i] = $_POST['nombre'];
            $_SESSION['indice'] = $i;
        } else {
            $i = $_SESSION['indice'];
            $_SESSION['nombre' . $i] = $_POST['nombre'];
            $_SESSION['indice'] = $i;
        }
    } else {
        header("Location: borrar_datos.php");
    }
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="nombre">¿Qué nombre quieres borrar?</label>
        <input value="<?php if (isset($nombre)) echo $nombre; ?>" name="nombre" id="nombre" type="text">
    </form>
</body>

</html>