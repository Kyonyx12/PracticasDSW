<?php
    // Conexión a la base de datos
    $conexion = mysqli_connect("127.0.0.1", "root", "", "tour") or die("Problemas con la conexión.");
    //$conexion = mysqli_connect("localhost", "id21571728_root", "n2t1GV/f/w4m", "id21571728_tour") or die("Problemas con la conexion");

    // Verificación de la conexión
    if ($conexion->connect_error) {
        // En caso de error en la conexión, muestra un mensaje y finaliza el script
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Obtención de datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $ciudad = $_POST['ciudad'];
    $celular = $_POST['celular'];
    $transporte = $_POST['transporte'];
    $comentarios = $_POST['comentarios'];
    $camisa = $_POST['camisa'];

    // Verificación de la existencia de la talla, si no se ha seleccionado, se asigna 'NINGUNA'
    $talla = isset($_POST['talla']) ? $_POST['talla'] : 'NINGUNA';

    // Creación de la consulta SQL para insertar los datos en la tabla 'registros'
    $sql = "INSERT INTO registros (nombre, apellidos, edad, sexo, ciudad, celular, transporte, comentarios, camisa, talla) 
            VALUES ('$nombre', '$apellidos', '$edad', '$sexo', '$ciudad', '$celular', '$transporte', '$comentarios', '$camisa', '$talla')";

    // Ejecución de la consulta y verificación del resultado
    if ($conexion->query($sql) === TRUE) {
        // Si la inserción se realiza con éxito, muestra un mensaje y redirige al index
        echo "<script languaje='javascript'>
                alert('El registro ha sido dado de alta.');
                location.assign('../index.html');
            </script>";
    } else {
        // En caso de error en la inserción, muestra un mensaje de error y redirige al index
        echo "<script languaje='javascript'>
                alert('Erros, los datos no se han registrado.');
                location.assign('../index.html');
            </script>" . $conexion->error;
    }

    // Cierre de la conexión a la base de datos
    $conexion->close();
?>
