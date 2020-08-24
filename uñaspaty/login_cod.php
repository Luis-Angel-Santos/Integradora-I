<?php

//INICIALIZAR SESION
session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION ["loggedin"] === true){
        header("location: inicio.php");
        exit;
    }

require_once "conexion.php";

$email = $pass ="";
$email_error = $pass_error="";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(empty(trim($_POST["email"]))){
        $email_error = "Por favor, ingrese el correo electrónico";
    }else{
        $email = trim($_POST["email"]);
    }

    if(empty(trim($_POST["pass"]))){
        $pass_error = "Por favor, ingrese la contraseña";
    }else{
        $pass = trim($_POST["pass"]);
    }



    // VALIDAR CREDENCIALES

    if(empty($email_error) && empty($pass_error)){

        $sql = "SELECT id_clienta, nombre, apellido_p, apellido_m, email, pass FROM clientas WHERE email = ?";
        
        if($stmt = mysqli_prepare($conexion, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = $email;

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }

            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id_clienta, $nombre, $apellido_p, $apellido_m, $email, $password_hash);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($pass, $password_hash)){
                        session_start();

                        // ALMACENAR DATOS EN VARIABLES DE SESIÓN
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id_clienta;
                        $_SESSION["email"] = $email;

                        header("location: inicio.php");
                    }else{
                        $pass_error = "La contraseña que has introducido es incorrecta";
                    }
                }
        }else{
            $email_error = "No se ha encontrado ninguna cuenta con ese correo electrónico";
        }
        }else{
            echo "UPS! algo salió mal, intentalo mas tarde";
        }
    }


    mysqli_close($conexion);

}

?>