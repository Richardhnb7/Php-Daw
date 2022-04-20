<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['entrada'] !=0){
        if (!isset($_SESSION['entrada'])){
     
            $_SESSION['numero'.$i]=$_POST['numero'];
            $_SESSION['entrada']=$i;
        }
        else{
            $i=$_SESSION['entrada'];
            $_SESSION['numero'.$i]=$_POST['numero'];
            $_SESSION['entrada']=$i;
            
        }
    }
    else{
    header("Location: resolver.php");
    }
 }   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
<body>			
		
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "numero">Dame el numero que quieras saber si esta dentro</label> 
			<input value = "<?php if(isset($numero))echo $numero;?>"
			id = "numero" name = "numero" type = "text">				
			
						
			
			<input type = "submit">
		</form>
	</body> 
</body>
</html>