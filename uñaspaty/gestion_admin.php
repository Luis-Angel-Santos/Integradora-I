<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: index.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos_admin.css">
    <title>Interfaz Administrador</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <nav class="menu">
                <a href="inicio.php">Home</a>

                <a href="cerrar_sesion.php">Cerrar Sesión</a>
            </nav>
            <div class="contenedor-texto">
                    <h2 class="nombre">Uñas Paty</h2>
            </div>
    </header>
    <section class="main">
        <section class="misCitas">
            <div class="contenedor">
               <div class="texto">
                 <h3 class="titulo">¡Bienvenida de nuevo!</h3>
                </div>
            </div>
        </section>
        <section class="tabla">
            <div class="contenedor">
             <h2 class="instrucciones">Seleccione una de las siguientes opciones para gestionar</h2>
             <a href="gestion_citas.php" class="boton">Todas las citas</a>
             <a href="gestion_usuarios.php" class="boton">Todos los usuarios</a>
             <br>
             <a href="buscar_cita.php" class="boton">Buscar cita</a>
             <a href="buscar_usuario.php" class="boton">Buscar usuario</a>
             <a href="comentarios.php" class="boton">Comentarios</a>
             <br> <br>
             <a href="materiales.php" class="boton">Mi material</a>
            </div>         
        </section>
    </section>
    <footer>
        <section class="redes">
            <div class="contenedor">
                <a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a>
                <a href="#" class="wa"><i class="fa fa-whatsapp"></i></a>
            </div>
        </section>
    </footer>
</body>
</html>