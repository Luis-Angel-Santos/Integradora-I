<?php

    require_once "conexion.php";

    //Definir Variables e inicializar con valores vacios 
    $nombre = $apellido_p = $apellido_m = $email = $pass  = "";
    $nombre_error = $apellido_p_error = $apellido_m_error = $email_error = $pass_error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Validando Input de Nombre 
        if(empty(trim($_POST["nombre"]))){
            $nombre_error = "Por favor, Ingresa tu Nombre";
            }else{
                $nombre = trim($_POST["nombre"]);
            }
         
            //Validando Input de Apellido Paterno
            if(empty(trim($_POST["apellido_p"]))){
                $apellido_p_error = "Por favor, Ingresa tu Apellido Paterno";
                }else{
                    $apellido_p = trim($_POST["apellido_p"]);
                }
 
            //Validando Input de Apellido Materno
            if(empty(trim($_POST["apellido_m"]))){
                $apellido_m_error = "Por favor, Ingresa tu Apellido Materno";
                }else{
                    $apellido_m = trim($_POST["apellido_m"]);
                }
        

        //Validando Input de Correo
        if(empty(trim($_POST["email"]))){
            $email_error = "Por favor, Ingresa tu Correo";
        }else{
            //prepara una declaracion de seleccion 
            $sql = "SELECT id_clienta FROM clientas WHERE email = ?"; 

            if($stmt = mysqli_prepare($conexion, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                $param_email = trim($_POST["email"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $email_error = "Este correo ya esta registrado";
                    }else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Ups! Este correo ya esta en uso";
                }
            }
        }


        //Validando Input de Contraseña 
        if(empty(trim($_POST["pass"]))){
            $pass_error = "Por favor, Ingresa tu Contraseña";
            }elseif(strlen(trim($_POST["pass"])) < 6 ){
                $pass_error = "La contraseña debe tener al menos 6 caracteres";
            }else{
                $pass = trim($_POST["pass"]);
            }
        
        
        //Comprobando Los errores de Entrada Antes de Insertar Los Datos En la Base De Datos 
        if(empty($nombre_error) && empty ($email_error) && empty($pass_error)){
        
            
                $sql = "INSERT INTO clientas (nombre, apellido_p, apellido_m, email, pass) VALUES (?, ?, ?, ?, ? )";
            if ($stmt = mysqli_prepare($conexion, $sql)){
                mysqli_stmt_bind_param($stmt, "sssss", $param_nombre, $param_apellido_p, $param_apellido_m, $param_email, $param_pass);

                //Estableciendo Parametro
                $param_nombre = $nombre; 
                $param_apellido_p = $apellido_p;
                $param_apellido_m = $apellido_m;
                $param_email = $email;
                $param_pass = password_hash($pass, PASSWORD_DEFAULT); //Encriptando contraseña


                if(mysqli_stmt_execute($stmt)){
                    header("location: index.php");
                }else{
                    echo "Algo Salio Mal, Intentalo despues";
                }
            }

        }
        
            mysqli_close($conexion);
        
        }

        


         

    



?>