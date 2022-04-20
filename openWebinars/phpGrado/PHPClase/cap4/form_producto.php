<?php

require_once("sesiones.php");
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		
		<form action = "insertar_producto.php" method = "POST">
			<label for = "nombre">Nombre</label> <br>
			<input id = "nombre" name = "nombre" type = "text">	<br><br>
            <label for = "descripcion">Descripcion</label> <br>
			<input 
			id = "descripcion" name = "descripcion" type = "text"><br><br>
            <label for = "peso">peso</label> <br>
			<input 
			id = "peso" name = "peso" type = "text"><br><br>
            <label for = "stock">stock</label> <br>
			<input 
			id = "stock" name = "stock" type = "text">	<br><br>
            <label for = "categoria">categoria</label> <br>
			<input 
			id = "categoria" name = "categoria" type = "text"><br><br>			
			
			<input type = "submit">
		</form>
	</body>
</html>
