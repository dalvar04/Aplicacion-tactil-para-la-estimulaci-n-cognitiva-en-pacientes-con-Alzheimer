<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link href="styleElige.css" rel = "stylesheet" type="text/css">
	<script src="myscriptElige.js"></script>
</head>


<body>

<?php

	if(!empty($_POST)){
		if(empty($_POST['nombre']) || empty($_POST['apellido1']) || empty($_POST['apellido2']) || empty($_POST['fecha']) ||empty($_POST['gds'])){
			header("location:creaUsuario.php");
		}else{
			session_start();
			$nombre = $_POST['nombre'];
			$apellido1 = $_POST['apellido1'];
			$apellido2 = $_POST['apellido2'];
			$fecha = $_POST['fecha'];
			$gds = $_POST['gds'];
            
            echo $nombre;
			echo $apellido1;
			echo $apellido2;
			echo $fecha;
            echo $gds;

			$conexion=mysqli_connect("localhost","root","");
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}else{
		
			}
		
			mysqli_select_db($conexion,"proyecto") or die ("Fallo al conectar con la BBDD");
			mysqli_set_charset($conexion,"utf8");
			$consulta="INSERT INTO usuario VALUES (NULL,'$nombre','$apellido1','$apellido2','Usuario','$fecha','$gds')";
			$resultado=mysqli_query($conexion,$consulta);
		
			if($resultado==false){
				echo "Error en la consulta";
			}else{
				header("location:listaUsuarios.php");
			}
		
			mysqli_close($conexion);
		}
	}
?>

</body>

</html>