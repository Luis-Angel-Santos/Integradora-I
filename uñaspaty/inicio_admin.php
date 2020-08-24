<?php

require "inicio_admincod.php";

?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, 
	minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilos.css">
    <title>Administrador</title>
    
</head>

<body>
    <div class="contenedor-todo">

        <div class="container">
          
            <h1 class="titulo">Modo Administrador</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="formulario" name="login">

                <label for="">Correo</label><input type="email" name="email">
                <span class="msg-error"><?php echo $email_error;?></span>

                <label for="">Contraseña</label><input type="password" name="pass">
                <span class="msg-error"><?php echo $pass_error;?></span>

                <input type="submit" value="Iniciar">
            </form>

        </div>

        <div class="ctn-text">
        <img src="imagenes/1.png" alt="">
            <div class="capa"></div>
            
        </div>

    </div>
</body>
</html>