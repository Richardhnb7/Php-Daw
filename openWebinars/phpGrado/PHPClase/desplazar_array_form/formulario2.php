<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['entrada'] !=0){
        if (!isset($_SESSION['entrada'])){
        
            $_SESSION['desplazar'.$i]=$_POST['desplazar'];
            $_SESSION['entrada']=$i;
        }
        else{
            $i=$_SESSION['entrada'];
            $_SESSION['desplazar'.$i]=$_POST['desplazar'];
            $_SESSION['entrada']=$i;
            
        }
    }
    else{
    header("Location: solucion.php");
    }
 }   
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo array</title>
</head>
<body>
    <form action="action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method = "POST">
        <label for="desplazar">Dame las posiciones que quieras desplazar</label>
        <input value = "<?php if(isset($desplazar))echo $desplazar;?>" id = "desplazar" name = "desplazar"  type="text">
        <input type="submit">
    </form>
</body>
</html>