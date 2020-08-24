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
    <link rel="stylesheet" href="css/estilos_miscitas.css">
    <title>Mis Citas</title>
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
                 <h3 class="titulo">Mis Citas</h3>
               </div>
            </div>
        </section>
        <section class="tabla">
            <div class="contenedor">
                <div class="citas"> 
                <form>
                <table id="mis-citas" class="mis-citas">
                    <thead>
                        <tr>
                            <th class="cita"></th>
                            <th>Día</th>
                            <th>Hora</th>
                            <th>Personas</th>
                            
                        </tr>
                    </thead>
                    <?php
				while($renglon = mysqli_fetch_array($resultado)){
						$dia = $renglon['dia'];
						$hora=$renglon['hora'];
                        $personas=$renglon['personas'];
                        $id=$renglon['id_cita'];
			            ?>
                    <tbody>
                        <tr>
                                <td class="cita">Cita <?php echo $id ?></td>
                                <td><?php echo $dia ?></td>
                                <td><?php echo "$hora"; ?></td>
                                <td><?php echo "$personas"; ?></td>
                            </tr>
                    </tbody>
                    <?php
				}
			?>
                </table>
                </form>
                    <a href="inicio.php" class="button">Home</a>
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