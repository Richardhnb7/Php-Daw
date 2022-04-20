<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['numero'] !=0){
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
    header("Location: solucion.php");
    }
 }   
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "numero">dame las posiciones</label> 
			<input value = "<?php if(isset($numero))echo $numero;?>"
			id = "numero" name = "numero" type = "text">				
			
						
			
			<input type = "submit">
		</form>
	</body> 
</html>