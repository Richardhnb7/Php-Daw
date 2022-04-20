

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="color.php" method="POST">
    <label for='color1'>Dame el color que quieres de fondo</label>
    <input value="<?php if(isset($color1)) echo $color1;?>"
    type="text" name='color1' id='color1'>
    <input type="submit">

</form>
</body>
</html>