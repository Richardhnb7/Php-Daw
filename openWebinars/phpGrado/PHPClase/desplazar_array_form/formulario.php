

 <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['numero'] !=0){
        if (!isset($_SESSION['indice'])){
            
            $_SESSION['numero'.$i]=$_POST['numero'];
            $_SESSION['indice']=$i;
        }
        else{
            $i=$_SESSION['indice'];
            $_SESSION['numero'.$i]=$_POST['numero'];
            $_SESSION['indice']=$i;
            
        }
    }
    else{
    header("Location: formulario3.php");
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
    <label for="numero">Dame un número</label>
    <input value = "<?php if(isset($numero))echo $numero;?>" id = "numero" name = "numero" type="text">
    <input type="submit">
    </form>
</body>
</html>