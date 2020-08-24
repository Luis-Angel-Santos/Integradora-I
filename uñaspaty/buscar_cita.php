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
    <link rel="stylesheet" href="css/buscar_c.css">
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
                 <h3 class="titulo">Buscar citas</h3>
               </div>
            </div>
        </section>
        <section class="tabla">
            <div class="contenedor">
            <form class="formBusqueda" method="POST" action="buscar_cita.php">
                            <label class="diabus" for="dia">Día</label>
                            <input type="date" name="dia" id="dia">
                            <label class="horabus" for="horabus">Hora</label>
                            <input type="time" name="hora" id="hora">
                            <br> <br>
                            <label class="personasbus" for="personasbus">Num de personas</label>
                            <input type="number" name="personas" id="personas" value="1">
                            <input type="submit" value="Buscar" name="btn1" class="boton">
                    </form>
                <?php
                    if(isset($_POST['btn1']))
                    {
                        include("conexion_citas.php");

                        $dia = $_POST['dia'];
                        $hora = $_POST['hora'];
                        $personas = $_POST['personas'];

                        $resultado= mysqli_query(Conectar(), "SELECT * FROM citas_reservadas
                        WHERE dia = '$dia'  OR hora = '$hora' OR personas = $personas
                        ORDER BY dia, hora, personas DESC  ");
                        
                        while($consulta= mysqli_fetch_array($resultado))
                          { ?>
                           <table id="mis-citas" class="mis-citas">
                            <thead>
                               <tr>
                                <th>Día</th>
                                <th>Hora</th>
                                <th>Personas</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                 <td><?php echo $consulta['dia'] ?></td>
                                 <td><?php echo $consulta['hora'] ?></td>
                                 <td><?php echo $consulta['personas'] ?></td>
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