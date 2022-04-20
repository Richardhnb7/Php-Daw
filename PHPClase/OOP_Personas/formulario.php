<?php
// quiero introducir personas e introducirlas en un array y despues quiero mostrarlas. 
// atributos dni, nombre,apellidos

require_once('Persona.php');
session_start();

/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['dni'] !=0){
        if (!isset($_SESSION['indice'])){
            
            $nombre=$_POST['nombre'];
            $apellido=$_POST["apellido"];
            $dni=$_POST['dni'];
            $per=new Persona($dni,$nombre,$apellido);
            $_SESSION["per".$i]=$per;
            $_SESSION['indice']=$i;
        }
        else{
            $i=$_SESSION['indice'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST["apellido"];
            $dni=$_POST['dni'];
            $per=new Persona($dni,$nombre,$apellido);
            $_SESSION["per".$i]=$per;
            $_SESSION['indice']=$i;
        }
    }
    else{
    header("Location: visionado.php");
    }
 }   
	
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
    <label for="dni">Dame el dni de la persona</label>
    <input value="<?php if(isset($dni))echo $dni;?>" type="text" name="dni" id="dni">
    <label for="nombre">Dame el nombre de la persona</label>
    <input value = "<?php if(isset($nombre))echo $nombre;?>" id = "nombre" name = "nombre" type="text">
    <label for="apellido">Dame el apellido de la persona</label>
    <input value= "<?php if(isset($apellido))echo $apellido;?>" type="text" name="apellido" id="apellido">>
    <input type="submit">
    </form>
</body>
</html>
