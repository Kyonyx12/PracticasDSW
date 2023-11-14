<!DOCTYPE html>
<html>
<head>
	<meta charset="uft-8">
</head>
<body>
	<?php
		$servidor = "127.0.0.1:3308";
		$usuario = "root";
		$clave = "";
		$bd = "registrocontactos";
		
		$conexion = mysqli_connect ($servidor,$usuario,$clave,$bd);
	?>
	<?php
	if(isset($_POST['registro'])){
		$nombre = $_POST["Nombre"];
		$telefono = $_POST["Telefono"];
		$correo = $_POST["Correo"];
		$comentarios = $_POST["Comentarios"];

		$guardar = "INSERT INTO contactos VALUES ('$nombre','$telefono','$correo','$comentarios','')";
		$ejecutar = mysqli_query ($conexion,$guardar);
	}
	?>

<title> Registro contactos </title>

	<form action="#" name="registrocontactos" method="post"> 
		<input type="text" name="Nombre" placeholder="nombre"> 
		<input type="text" name="Telefono" placeholder="telefono"> 
		<input type="email" name="Correo" placeholder="correo"> 
		<input type="text" name="Comentarios" placeholder="comentarios">

	<input type="submit" name="registro">
	</form> 
</body>