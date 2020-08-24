<?php
	require_once("conexion_citas.php");
	$sql="SELECT * FROM citas_reservadas";
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
    <link rel="stylesheet" href="css/estilos_admin.css">
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
                 <h3 class="titulo">Citas</h3>
               </div>
            </div>
        </section>
        <section class="tabla">
            <div class="contenedor">
            <a href="gestion_citas.php" class="boton boton_one">Todas las citas</a>
            <a href="gestion_usuarios.php" class="boton boton_dos">Todos los usuarios</a>
            <br>
            <a href="buscar_cita.php" class="boton boton_tres">Buscar cita</a>
            <a href="buscar_usuario.php" class="boton boton_dos">Buscar usuario</a>
                <form>
                <table id="mis-citas" class="mis-citas">
                    <thead>
                        <tr>
                            <th>Día</th>
                            <th>Hora</th>
                            <th>Personas</th>
                        </tr>
                    </thead>
                    <?php
				while($renglon = mysqli_fetch_array($resultado)){
			            ?>
                    <tbody>
                        <tr>
                                <td><?php echo $renglon['dia'] ?></td>
                                <td><?php echo $renglon['hora'] ?></td>
                                <td><?php echo $renglon['personas'] ?></td>
                        </tr>
                    </tbody>
                    <?php
				}
			?>
                </table>
                </form>
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