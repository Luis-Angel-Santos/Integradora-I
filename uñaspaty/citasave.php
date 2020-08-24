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
    <link rel="stylesheet" href="css/citasave.css">
    <title>Cita Guardada</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <nav class="menu">
                <a href="inicio.php">Home</a>
                <a href="#">Muestrario</a>
                <a href="cerrar_sesion.php">Cerrar Sesión</a>
            </nav>
            <div class="contenedor-texto">
                    <h2 class="nombre">Uñas Paty</h2>
            </div>
    </header>
    <section class="main">
        <section class="guardado">
            <div class="contenedor">
                <div class="hecho">   
                    <div class="texto">
                        <h3 class="titulo">Cita guardada</h3>
                    </div>
                    <div class="imagen">
                       <img class="paloma" src="imagenes/Check.png" alt="Cita Guardada">
                    </div>
                    <p>La cita se ha guardado satisfactoriamente.</p>
                    <a href="inicio.php" class="button home">Home</a>
                    <a href="miscitas.php" class="button miscitas">Mis Citas</a>
                </div>         
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