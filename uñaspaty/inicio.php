<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosprincipales.css">
    <title>Inicio</title>
</head>
<body>
    <div class="contenedor">
        <header id="inicio">
            <nav class="menu">
                <a href="#" id="btn-inicio">Inicio</a>
                <a href="#" id="btn-nosotros">Nosotros</a>
                <a href="#" id="btn-galeria">Galeria</a>
                <a href="#" id="btn-citas">Citas</a>
                <a href="#" id="btn-contacto">Contacto</a>
                <a href="cerrar_sesion.php">Cerrar Sesion</a>
            </nav>
            <div class="textos">
                <h1>Uñas Paty</h1>
                <p>Diseños Unicos</p>
            </div>
        </header>
        <section class="eslogan">
            <h2>Bienvenida a "Uñas Paty"</h2>
            <p>Frase o Eslogan</p>
        </section>
        <section class="caracteristicas">
            <div class="texto">
                <h2>Caracteristicas</h2>
                <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Nullam risus dui, euismod a augue id, varius pretium magna.<br> Maecenas tortor sapien, porttitor a aliquam non, efficitur nec nunc.</p>
            </div>
                <div class="tarjetas">
                    <div class="caract">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                        </svg>
                        <div class="textos">
                            <h2>Excelente Ambiente</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam risus dui, euismod a augue id, varius pretium magna. Maecenas tortor sapien, porttitor a aliquam non, efficitur nec nunc.</p>
                        </div>  
                    </div>
                    <div class="caract">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                        </svg>
                        <div class="textos">
                            <h2>Excelentes Precios</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam risus dui, euismod a augue id, varius pretium magna. Maecenas tortor sapien, porttitor a aliquam non, efficitur nec nunc.</p>
                        </div>
                    </div>
                    <div class="caract">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                        </svg>
                        <div class="textos">
                            <h2>Excelentes Diseños</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam risus dui, euismod a augue id, varius pretium magna. Maecenas tortor sapien, porttitor a aliquam non, efficitur nec nunc.</p>
                        </div>
                    </div>
                </div>    
        </section>
        <section class="acerca-de" id="nosotros">
            <div class="imagen">
                <img src="imagenes/about.jpg" alt="">
            </div>
            <div class="texto">
                <h2>Nosotros</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam risus dui, euismod a augue id, varius pretium magna. Maecenas tortor sapien, porttitor a aliquam non, efficitur nec nunc. Nulla tincidunt, sem non sollicitudin iaculis, augue nibh lobortis dolor, vitae ultricies nisi dui sed ipsum. Ut lacinia vel erat nec vestibulum. Donec ultricies dui in massa dictum mollis.</p>
            </div>
        </section>
        <section class="galeria">
            <h2 id="galeria">Galeria</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam risus dui, euismod a augue id, varius pretium magna.<br> Maecenas tortor sapien, porttitor a aliquam non, efficitur nec nunc.</p>
            <div class="imagenes">
                <div class="img">
                    <img src="imagenes/01.jpg" alt="">
                </div>
                <div class="img">
                    <img src="imagenes/02.jpg" alt="">
                </div>
                <div class="img">
                    <img src="imagenes/03.jpg" alt="">
                </div>
                <div class="img">
                    <img src="imagenes/04.jpg" alt="">
                </div>
                <div class="img">
                    <img src="imagenes/05.jpg" alt="">
                </div>
                <div class="img">
                    <img src="imagenes/06.jpg" alt="">
                </div>
                <div class="img">
                    <img src="imagenes/07.jpg" alt="">
                </div>
                <div class="img">
                    <img src="imagenes/08.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="citas" id="citas">
            <center><img src="imagenes/citas.jpg" alt=""></center>
            <div class="textos">
                <h3>No quedes con las ganas de lucir tus nuevas uñas y reserva una cita</h3>
                <a href="reservarc.php">Quiero una Cita</a>
            </div>
        </section>
        <footer>
            <section class="contacto">
                <div class="texto">
                    <h2 id="contacto">Contacto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam risus dui, euismod a augue id, varius pretium magna.<br> Maecenas tortor sapien, porttitor a aliquam non, efficitur nec nunc.</p>
                </div>
                <form class="formulario" action="contacto.php" method="POST">
                    <input type="text" name="nombre" placeholder="Tu nombre...">
                    <input type="email" name="correo" placeholder="Tu correo...">
                    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje..."></textarea>
                    <input type="submit" name="submit" value="Enviar">
                </form>
            </section>
            <div class="ubicacion">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d746.6600189130886!2d-98.14018995937292!3d19.41539888622286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d02023f10056d9%3A0x9bb9b711e4e8df6e!2sParque%20Principal!5e0!3m2!1ses!2smx!4v1594179547269!5m2!1ses!2smx" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <section class="footer">
                <h2>© Copyright 2020 EAMJ - Todos los Derechos Reservados </h2>
            </section>
        </footer>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/efectos.js"></script>
</body>
</html>