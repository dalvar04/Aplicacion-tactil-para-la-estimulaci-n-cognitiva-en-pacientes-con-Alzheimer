<!DOCTYPE html>
<html>
<head>

</head>

<body>
	<?php
			session_start();
			$idUsuario = $_POST['idUsuario'];
			$nombre = $_POST['nombre'];
			$apellido1 = $_POST['apellido1'];
			$apellido2 = $_POST['apellido2'];
			$rol = $_POST['rol'];
			$fecha = $_POST['fecha'];
			$gds = $_POST['gds'];
			
			echo $idUsuario;
            echo $nombre;
			echo $apellido1;
			echo $apellido2;
			echo $rol;
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
			$consulta="UPDATE usuario SET nombre = '$nombre', apellido1 = '$apellido1' , apellido2 = '$apellido2' , rol = '$rol' , fechaNacimiento = '$fecha' , nivelGDS = '$gds' WHERE idUsuario = $idUsuario";
			$resultado=mysqli_query($conexion,$consulta);
			header("location:listaUsuarios.php");
			
	?>
</body>
</html>
			