<?php
	require_once("conexion_citas.php");
	//print_r($_POST);
	$dia=$_POST["dia"];
	$hora=$_POST["hora"];
	$personas=$_POST["personas"];
	
	$sql="INSERT INTO citas_reservadas(dia,hora,personas) VALUES ('$dia','$hora', '$personas')";
	$resultado = mysqli_query(Conectar(), $sql);
	if(resultado){
		echo "<script>
				window.location = 'citasave.php';
				</script>";
	}else{
		echo "<script>
				alert('Existio alguna falla, favor de intentar nuevamente');
				window.location = 'reservarc.php';
				</script>";
	}
	?>