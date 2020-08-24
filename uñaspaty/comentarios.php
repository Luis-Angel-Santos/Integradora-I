<?php

require_once("conexion_citas.php");    
	$sql="SELECT * FROM contacto";
	$resultado= mysqli_query(Conectar(), $sql);

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
                 <h3 class="titulo">Comentarios</h3>
               </div>
            </div>
        </section>
        <section class="tabla">
            <div class="contenedor">
                    
                            <table id="mis-citas" class="mis-citas">
                    <thead>
                        <tr>
                            <th class="cita"></th>
                            
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            
                        </tr>
                    </thead>
                    <?php
				while($renglon = mysqli_fetch_array($resultado)){
						$nombre = $renglon['nombre'];
						$email=$renglon['email'];
                        $mensaje=$renglon['mensaje'];
                        $com=$renglon['id_com'];
			            ?>
                    <tbody>
                        <tr>
                                <td class="cita"><?php echo $com ?></td>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo "$email"; ?></td>
                                <td><?php echo "$mensaje"; ?></td>
                            
                            </tr>
                    </tbody>
                    <?php
				}
			?>
                </table>
                
                
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