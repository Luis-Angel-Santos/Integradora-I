<?php 

    include 'registro_cod.php';

?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, 
	minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilos.css">
    <title>Registro Clienta </title>

</head>

<body>
    <div class="contenedor-todo">

        <div class="container">
          
            <h1 class="titulo">Registrate...</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">

                <label for=""></label><input type="text" name="nombre" placeholder="Nombre">
                <span class="msg-error"><?php echo $nombre_error;?></span>

                <label for=""></label><input type="text" name="apellido_p" placeholder="Apellido Paterno">
                <span class="msg-error"><?php echo $apellido_p_error;?></span>

                <label for=""></label><input type="text" name="apellido_m" placeholder="Apellido Materno">
                <span class="msg-error"><?php echo $apellido_m_error;?></span>

                <label for=""></label><input type="email" name="email" placeholder="Correo">
                <span class="msg-error"><?php echo $email_error;?></span>

                <label for=""></label><input type="password" name="pass" placeholder="Contraseña">
                <span class="msg-error"><?php echo $pass_error;?></span>


                <input type="submit" value="Registrarse">
            </form>

            <span class="text-footer"> ¿Ya tienes una cuenta? <a href="index.php">Inicia Sesión</a>
            </span>
        </div>

        <div class="ctn-text">
        <img src="imagenes/1.png" alt="">
            <div class="capa"></div>
            
        </div>

    </div>
</body>
</html>