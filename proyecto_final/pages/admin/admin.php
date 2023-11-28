<html>
<head>
 	<title>Iniciar sesion</title>
	<link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body align="center">
<?php
    if (isset($_POST['login'])) { // Verifica si se ha enviado el formulario

        // Obtiene los datos enviados por el formulario
        $name = $_REQUEST['name'];
        $clave = $_REQUEST['clave'];

        // Realiza la conexión a la base de datos
        $conexion = mysqli_connect("127.0.0.1", "root", "", "tour") or die("Problemas con la conexión.");
        //$conexion = mysqli_connect("localhost", "id21571728_root", "n2t1GV/f/w4m", "id21571728_tour") or die("Problemas con la conexión.");

        // Verifica si el nombre de usuario es 'ADMIN'
        if ($name !== 'ADMIN') {
            echo "<script language='JavaScript'>
                    alert('No existe un admin con ese nombre.')
                    location.assign('admin.php');
                </script>";
            mysqli_close($conexion);
            exit; // Salir del script después de redireccionar
        }

        // Busca al usuario en la base de datos
        $usuario = mysqli_query($conexion, "SELECT * FROM admin WHERE name='$name'");
        
        if ($columna = mysqli_fetch_array($usuario)) {
            $nombre = $columna['ADMIN'];
            $claveBD = $columna['clave'];

            // Verifica si la clave coincide con la clave almacenada en la base de datos
            if ($clave == $claveBD) {
                echo "<script language='JavaScript'>
                        alert('Inicio correcto.')
                    </script>";

                $_SESSION['ADMIN'] = $nombre; // Almacena el nombre de usuario en la sesión

                echo "<script language='JavaScript'>
                            location.assign('usuarios.php'); // Redirecciona a la página de usuarios
                        </script>";

                mysqli_close($conexion);
                exit; // Salir del script después de redireccionar
            } else {
                echo "<script language='JavaScript'>
                        alert('Clave incorrecta, intenta de nuevo.')
                        location.assign('admin.php');
                    </script>";
                mysqli_close($conexion);
                exit; // Salir del script después de redireccionar
            }
        }

        // Si no se encuentra un 'admin' con ese nombre
        echo "<script language='JavaScript'>
                alert('No existe un admin con ese nombre.')
                location.assign('admin.php');
            </script>";
        mysqli_close($conexion);
        exit; // Salir del script después de redireccionar
    }
?>
  <header>
        <!-- Barra de navegación -->
        <nav>
            <ul>
                <!-- Enlaces de navegación -->
                <li><a href="../../index.html">Inicio</a></li>
                <li><a href="../../pages/historia/historia.html">Historia</a></li>
                <li><a href="../../pages/lugares/lugares.html">Lugares turísticos</a></li>
                <li><a href="../../pages/platillos/platillos.html">Platillos</a></li>
                <li><a href="../../pages/contacto/contacto.html">Contacto</a></li>
                <li><a href="../../pages/registro/registro.html">Registrarse</a></li>
                <li><a href="../../pages/admin/admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>
	<main>
		<!-- Título para iniciar sesión como administrador -->
		<h1 align="center" style="margin-bottom: 10rem; padding-top: 3.5rem">Iniciar sesión (Admin)</h1>

		<!-- Contenedor con efecto de vidrio -->
		<div class="glass-container">
			<!-- Formulario para iniciar sesión -->
			<form action="#" method="POST" onsubmit="return validarDatos();" enctype="multipart/form-data" id="login">
				<label>NOMBRE:</label>
				<input type="text" name="name" required>
				<label>CLAVE:</label>
				<input type="password" name="clave" required>

				<!-- Botón para enviar el formulario -->
				<button type="submit" name="login">ENVIAR</button>
			</form>
		</div>
	</main>
    <footer>
        <!-- Información de derechos de autor -->
        <p>Copyright &copy; 2023</p>
        <p>Todos los derechos reservados @Antonio Lopez, @Karen Orozco</p>
    </footer>
         <!-- Script de JavaScript -->
    <script src="../../js/script.js"></script>
</body>
</html>