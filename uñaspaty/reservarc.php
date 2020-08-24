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
    <link rel="stylesheet" href="css/estilos_reservarc.css">
    <title>Reservar Cita</title>
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
        <section class="reservar">
            <div class="contenedor">
               <div class="texto">
                 <h3 class="titulo">Reservar Cita</h3>
                  <p>Las citas que se reserven solo podrán ser <span class="bold"> canceladas </span>
                     con al menos <span class="bold">48 hrs </span> de antelación.
                  </p>
               </div>
            </div>
        </section>
        <section class="formulario">
            <div class="contenedor">
                <div class="campos">
                    <br>
                    <p class="aviso"> (<span class="rojo">*</span>) Campos obligatorios</p>
                    <br>
                    <form class="formCitas" method="POST" action="insertarcita.php">
                            <label class="dia" for="dia"><span class="rojo">*</span>Día:</label>
                            <input type="date" name="dia" id="dia" min="2020-08-02" max="2020-12-20" required>
                            <label class="hora" for="hora"><span class="rojo">*</span>Hora:</label>
                            <input type="time" name="hora" id="hora" min="09:00" max="22:00" required>
                            <br> <br>
                            <label class="persona" for="personas"><span class="rojo">*</span>Cantidad de personas:</label>
                            <input type="number" name="personas" min="1" max="5" id="personas" value="1" required>
                            <p class="advertencia">(Esto es solo con la intención de tener un control sobre la cita, si asistirá con un acompañante</p>
                            <p class="advertencia">que desea recibir un servicio deberá marcarlo en la cantidad de personas).</p>
                            <br>
                            <label class="comentario" for="comentarios">Comentarios:</label> <br>
                            <textarea name="mensaje" placeholder="Deja un mensaje (Opcional)"></textarea>
                            <br>
                            <a href="#" class="button">Atras</a>
                            <input type="submit" value="Reservar cita" class="boton">
                    </form>    
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