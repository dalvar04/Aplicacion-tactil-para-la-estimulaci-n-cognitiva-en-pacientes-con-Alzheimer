<!DOCTYPE html>
<html>
<head>

</head>


</h1><p class="titulo" id="titulo">Borrar Usuario</p></h1>

<body>
	<?php
			session_start();
			$conexion=mysqli_connect("localhost","root","");
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}else{
		
			}

			$idUser = $_SESSION['idUser'];
			mysqli_select_db($conexion,"proyecto") or die ("Fallo al conectar con la BBDD");
			mysqli_set_charset($conexion,"utf8");
			$consulta="DELETE FROM usuario WHERE idUsuario=$idUser";
			$resultado=mysqli_query($conexion,$consulta);
			header("location:listaUsuarios.php");
		
	?>
</body>
</html>

		