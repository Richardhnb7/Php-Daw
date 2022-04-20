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
#empty para comprobar si una variable esta vacia
#isset determina si una variable esta definida 

//si en el formulario pusimos get pondremos get pero si pusimos post pondremos post

        if (isset($_POST['usuario'])) {
            if(!empty($_POST['usuario'])){
                $usuario= $_POST['usuario'];
                echo $usuario;
                echo "<br>";
            }
        }
    if (isset($_POST['password'])) {
        if (!empty($_POST['password'])) {
            $password = $_POST['password'];
            echo $password;
            echo "<br>";
        }
    }

    ?>


    </form>
</body>
</html>