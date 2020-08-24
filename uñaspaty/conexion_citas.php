<?php
	function Conectar(){
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$bd = "login_unas";
		
		$conexion_citas = mysqli_connect($servidor, $usuario, $password, $bd);
		
		/*if ($conexion){
			echo "Conectado";
		}else{
			echo "Desconectado"
		}*/
		return $conexion_citas;
	}
	
		//Conectar();
?>