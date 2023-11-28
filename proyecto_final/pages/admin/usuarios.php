<!DOCTYPE html>
<html>
<head>
  <title>Usuarios</title>
  <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  <link rel="stylesheet" type="text/css" href="./css/usuarios.css">
</head>
<body>
    <?php

        // Establece la conexión a la base de datos
        $conexion = mysqli_connect("127.0.0.1", "root", "", "tour") or die("Problemas con la conexión.");
        //$conexion = mysqli_connect("localhost", "id21571728_root", "n2t1GV/f/w4m", "id21571728_tour") or die("Problemas con la conexión.");

        // Consulta SQL para seleccionar todos los registros de la tabla 'registros'
        $sql = "SELECT * FROM registros";

        // Ejecuta la consulta en la base de datos
        $resultado = mysqli_query($conexion, $sql);

        // A partir de aquí, puedes trabajar con los datos en $resultado

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
            <hr/>
            <main>
                <!-- Título para la sección de registros -->
                <h1 align="center" style="margin-bottom: 10rem; padding-top: 3.5rem">Registros</h1>

                <!-- Contenedor con efecto de vidrio y alineación centrada -->
                <div class="glass-container" style="text-align:center;">
                    <!-- Tabla de registros -->
                    <table align='center' style="margin-bottom:1rem;">
                        <thead>
                            <!-- Encabezados de la tabla -->
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Ciudad</th>
                                <th>Celular</th>
                                <th>Transporte</th>
                                <th>Comentarios</th>
                                <th>Camisa</th>
                                <th>Talla</th>
                                <th>Modificar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Iteración a través de los registros obtenidos
                            while($registro=mysqli_fetch_assoc($resultado)){
                            ?>
                            <tr>
                                <!-- Datos de cada registro -->
                                <td><?php echo $registro['id']?></td>
                                <td><?php echo $registro['nombre']?></td>
                                <td><?php echo $registro['apellidos']?></td>
                                <td><?php echo $registro['edad']?></td>
                                <td><?php echo $registro['sexo']?></td>
                                <td><?php echo $registro['ciudad']?></td>
                                <td><?php echo $registro['celular']?></td>
                                <td><?php echo $registro['transporte']?></td>
                                <td><?php echo $registro['comentarios']?></td>
                                <td><?php echo $registro['camisa']?></td>
                                <td><?php echo $registro['talla']?></td>
                                <!-- Enlaces para modificar y eliminar registros -->
                                <td><?php echo "<a class='button-borrar' href='../../php/borrar.php?ide=".$registro['id']."' onclick='return confirmar()'>Eliminar</a>";?></td>
                                <td><?php echo "<a class='button-modificar' href='usuariosMod.php?ide=".$registro['id']."'>Modificar</a>";?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
            <hr/>
            <footer>
                <!-- Información de derechos de autor -->
                <p>Copyright &copy; 2023</p>
                <p>Todos los derechos reservados @Antonio Lopez, @Karen Orozco</p>
            </footer>
                <!-- Script de JavaScript -->
            <script src="../../js/script.js"></script>
</body>
</html>
