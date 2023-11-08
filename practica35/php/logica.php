<?php
$conexion = mysqli_connect("localhost","root","","tour") 
			or die("Problemas con la conexion");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$ciudad = $_POST['ciudad'];
$celular = $_POST['celular'];
$transporte = $_POST['transporte'];
$comentarios = $_POST['comentarios'];
$camisa = $_POST['camisa'];

$talla = isset($_POST['talla']) ? $_POST['talla'] : 'NINGUNA';

$sql = "INSERT INTO registros (nombre, apellidos, edad, sexo, ciudad, celular, transporte, comentarios, camisa, talla) 
        VALUES ('$nombre', '$apellidos', '$edad', '$sexo', '$ciudad', '$celular', '$transporte', '$comentarios', '$camisa', '$talla')";

if ($conexion->query($sql) === TRUE) {
    echo "<script languaje='javascript'>
			alert('El registro ha sido dado de alta.');
			location.assign('../index.html');
		</script>";
} else {
    echo "<script languaje='javascript'>
            alert('Erros, los datos no se han registrado.');
            location.assign('../index.html');
        </script>" . $conexion->error;
}

$conexion->close();
?>
