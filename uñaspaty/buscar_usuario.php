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
    <link rel="stylesheet" href="css/buscar_u.css">
    <title>Interfaz Administrador</title>
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
        <section class="misCitas">
            <div class="contenedor">
               <div class="texto">
                 <h3 class="titulo">Buscar usuarios</h3>
               </div>
            </div>
        </section>
        <section class="tabla">
            <div class="contenedor">
            <form class="formBusqueda" method="POST" action="buscar_usuario.php">
                            <label class="id_clienta" for="id_clienta">Id:</label>
                            <input type="number" name="id_clienta" id="id_clienta">
                            <label class="nombre" for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre">
                            <br> <br>
                            <label class="apellido_p" for="apellido_p">Apellido Pat:</label>
                            <input type="text" name="apellido_p" id="apellido_p">
                            <label class="apellido_m" for="apellido_m">Apellido Mat:</label>
                            <input type="text" name="apellido_m" id="apellido_m"> <br>
                            <label class="email" for="email">Email:</label>
                            <input type="email" name="email" id="email">
                            <input type="submit" value="Buscar" name="btn1" class="boton">
                    </form>
                <?php
                    if(isset($_POST['btn1']))
                    {
                        include("conexion.php");

                        $id_clienta = $_POST['id_clienta'];
                        $nombre = $_POST['nombre'];
                        $apellido_p = $_POST['apellido_p'];
                        $apellido_m = $_POST['apellido_m'];
                        $email = $_POST['email'];
                        $resultado= mysqli_query($conexion, "SELECT * FROM clientas WHERE id_clienta = '$id_clienta'  OR nombre = '$nombre' OR apellido_p = '$apellido_p' OR apellido_m = '$apellido_m' OR email = '$email'
                        ORDER BY id_clienta DESC, nombre DESC, apellido_p DESC, apellido_m DESC, email DESC   ");
                        
                        while($consulta= mysqli_fetch_array($resultado))
                          { ?>
                           <table id="mis-citas" class="mis-citas">
                            <thead>
                               <tr>
                                <th>Id Clienta</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Email</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                 <td><?php echo $consulta['id_clienta'] ?></td>
                                 <td><?php echo $consulta['nombre'] ?></td>
                                 <td><?php echo $consulta['apellido_p'] ?></td>
                                 <td><?php echo $consulta['apellido_m'] ?></td>
                                 <td><?php echo $consulta['email'] ?></td>
                               </tr>
                             </tbody>
                             </table>
                        <?php } ?>
                    <?php } ?>
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