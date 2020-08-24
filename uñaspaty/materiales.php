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
    <link rel="stylesheet" href="css/estilos_materiales.css">
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
                 <h3 class="titulo">Mis materiales</h3>
               </div>
            </div>
        </section>
        <section class="tabla">
            <div class="contenedor">
            <h2 class="instrucciones">Busque o agregue un aurtículo</h2>
            <form class="formBusqueda" method="POST" action="materiales.php">
                            <label class="nombre_producto" for="nombre_producto">Nombre del producto:</label>
                            <input type="text" name="nombre_producto" id="nombre_producto">
                            <label class="cantidad" for="cantidad">Cantidad:</label>
                            <input type="text" name="cantidad" id="cantidad">
                            <br> <br>
                            <label class="fecha_elaboracion" for="fecha_elaboracion">Fecha de elaboración:</label>
                            <input type="date" name="fecha_elaboracion" id="fecha_elaboracion">
                            <label class="precio" for="precio">Precio:</label>
                            <input type="number" name="precio" id="precio"> <br>
                            <input type="submit" value="Agregar" name="btn1" class="boton boton_one">
                            <input type="submit" value="Ver todo" name="btn2" class="boton boton_dos">
                            <input type="submit" value="Buscar" name="btn3" class="boton boton_tres">
                    </form>

                    <!---  BOTON UNO --- AGREGAR ---> 

                    <?php
                    if(isset($_POST['btn1']))
                    {
                        include("conexion_mat.php");

                        $nombre_producto = $_POST['nombre_producto'];
                        $cantidad = $_POST['cantidad'];
                        $fecha_elaboracion = $_POST['fecha_elaboracion'];
                        $precio = $_POST['precio'];
                        $resultado= mysqli_query(Conectar(), "INSERT INTO articulos (nombre_producto, cantidad, fecha_elaboracion, precio) values ('$nombre_producto', '$cantidad', '$fecha_elaboracion', '$precio') ");
                        ?>
                           <h2>¡¡Los datos se han insertado correctamente!!</h2>
                    <?php } ?>

                    <!---  BOTON DOS --- VER TODO ---> 

                    <?php
                    if(isset($_POST['btn2']))
                    {
                        include("conexion_mat.php");

                        $nombre_producto = $_POST['nombre_producto'];
                        $cantidad = $_POST['cantidad'];
                        $fecha_elaboracion = $_POST['fecha_elaboracion'];
                        $precio = $_POST['precio'];
                        $resultado= mysqli_query(Conectar(), "SELECT * FROM articulos");
                        
                        while($consulta= mysqli_fetch_array($resultado))
                          { ?>
                           <table id="mis-citas" class="mis-citas">
                            <thead>
                               <tr>
                                <th>Nombre Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha Elaboración</th>
                                <th>Precio</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                 <td><?php echo $consulta['nombre_producto'] ?></td>
                                 <td><?php echo $consulta['cantidad'] ?></td>
                                 <td><?php echo $consulta['fecha_elaboracion'] ?></td>
                                 <td><?php echo $consulta['precio'] ?></td>
                               </tr>
                             </tbody>
                             </table>
                        <?php } ?>
                    <?php } ?>

                    <!---  BOTON TRES --- BUSQUEDA ---> 

                <?php
                    if(isset($_POST['btn3']))
                    {
                        include("conexion_mat.php");

                        $nombre_producto = $_POST['nombre_producto'];
                        $cantidad = $_POST['cantidad'];
                        $fecha_elaboracion = $_POST['fecha_elaboracion'];
                        $precio = $_POST['precio'];
                        $resultado= mysqli_query(Conectar(), "SELECT * FROM articulos
                        WHERE nombre_producto = '$nombre_producto'  OR cantidad = '$cantidad'
                        OR fecha_elaboracion = '$fecha_elaboracion' OR precio = '$precio'
                        ORDER BY nombre_producto DESC, cantidad DESC, fecha_elaboracion DESC, precio DESC  ");
                        
                        while($consulta= mysqli_fetch_array($resultado))
                          { ?>
                           <table id="mis-citas" class="mis-citas">
                            <thead>
                               <tr>
                                <th>Nombre Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha Elaboración</th>
                                <th>Precio</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                 <td><?php echo $consulta['nombre_producto'] ?></td>
                                 <td><?php echo $consulta['cantidad'] ?></td>
                                 <td><?php echo $consulta['fecha_elaboracion'] ?></td>
                                 <td><?php echo $consulta['precio'] ?></td>
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