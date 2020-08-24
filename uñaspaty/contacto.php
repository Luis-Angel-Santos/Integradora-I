<?php
    require_once("conexion_citas.php");
        //traspasamos a variables locales, para evitar complicaciones con las comillas:
        $nombre = $_POST["nombre"];
        $email = $_POST["correo"];
        $mensaje = $_POST["mensaje"];
        
        //Preparamos la orden SQL
        $consulta = "INSERT INTO contacto(id_com, nombre, email, mensaje) VALUES ('','$nombre','$email','$mensaje')";
        $resultado = mysqli_query(Conectar(), $consulta);
        if ($resultado ){
            echo "<script>
				alert('Gracias por los mensajes :)');
				window.location = 'inicio.php';
				</script>";
            } else {
                echo "<script>
				alert('Existio alguna falla, favor de intentar nuevamente :(');
				window.location = 'inicio.php';
				</script>";
            }
        
        
    
	?>