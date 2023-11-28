<?php
    // Conexión a la base de datos
    $conexion = mysqli_connect("127.0.0.1", "root", "", "tour") or die("Problemas con la conexión.");
    //$conexion = mysqli_connect("localhost", "id21571728_root", "n2t1GV/f/w4m", "id21571728_tour") or die("Problemas con la conexion");

    // Eliminación de un registro específico según el ID recibido
    mysqli_query($conexion, "delete from registros where id='$_REQUEST[ide]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    // Búsqueda del registro eliminado para verificar si existe aún
    $registros = mysqli_query($conexion, "select nombre,apellidos,edad,sexo,ciudad,celular,transporte,comentarios,camisa,talla 
        from registros where id='$_REQUEST[ide]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    // Verificación de si se encontró el registro eliminado
    if ($reg = mysqli_fetch_array($registros)) {
        // Si se encuentra el registro, se muestra un mensaje indicando que no se pudo eliminar
        echo "<script languaje='JavaScript'>
                alert('El registro no pudo ser eliminado.');
                location.assign('../pages/admin/usuarios.php');
            </script>";
    } else {
        // Si no se encuentra el registro, se muestra un mensaje indicando que se ha eliminado correctamente
        echo "<script languaje='JavaScript'>
                alert('El registro ha sido borrado.');
                location.assign('../pages/admin/usuarios.php');
            </script>";
    }

    // Cierre de la conexión a la base de datos
    mysqli_close($conexion);
?>
