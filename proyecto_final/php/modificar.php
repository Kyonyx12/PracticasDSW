<?php
    // Conexión a la base de datos
    $conexion = mysqli_connect("127.0.0.1", "root", "", "tour") or die("Problemas con la conexión.");
    //$conexion = mysqli_connect("localhost", "id21571728_root", "n2t1GV/f/w4m", "id21571728_tour") or die("Problemas con la conexion");

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

    // Actualización de los datos en la tabla 'registros' según el ID recibido
    mysqli_query($conexion, "update registros set nombre='$_REQUEST[nombre]',apellidos='$_REQUEST[apellidos]',edad='$_REQUEST[edad]',sexo='$_REQUEST[sexo]',
    ciudad='$_REQUEST[ciudad]',celular='$_REQUEST[celular]',transporte='$_REQUEST[transporte]',comentarios='$_REQUEST[comentarios]',camisa='$_REQUEST[camisa]',talla='$_REQUEST[talla]'
    where id='$_REQUEST[ide]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    // Búsqueda del registro actualizado para verificar si se modificó correctamente
    $registros = mysqli_query($conexion, "select nombre,apellidos,edad,sexo,ciudad,celular,transporte,comentarios,camisa,talla 
    from registros where id='$_REQUEST[ide]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    // Verificación de si se encontró el registro actualizado
    if ($reg = mysqli_fetch_array($registros)) {
        // Si se encuentra el registro, muestra un mensaje indicando que se ha modificado
        echo "<script languaje='JavaScript'>
                alert('El actualizado ha sido modificado.');
                location.assign('../pages/admin/usuarios.php');
            </script>";
    } else {
        // Si no se encuentra el registro, muestra un mensaje indicando que no existe un registro con ese ID
        echo "<script languaje='JavaScript'>
                alert('No existe un registro con ese ID.');
                location.assign('../pages/admin/usuarios.php');
            </script>";
    }

    // Cierre de la conexión a la base de datos
    mysqli_close($conexion);
?>
