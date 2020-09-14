<?php
			session_start();
			$conexion=mysqli_connect("localhost","root","");
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}else{
		
			}

			$_SESSION['idUser'] = $_GET['id'];
			$idUser = $_GET['id'];
			mysqli_select_db($conexion,"proyecto") or die ("Fallo al conectar con la BBDD");
			mysqli_set_charset($conexion,"utf8");
			$consulta="SELECT * FROM usuario WHERE idUsuario=$idUser";
			$resultado=mysqli_query($conexion,$consulta);

			while($fila=mysqli_fetch_array($resultado)){
				$idUsuario = $fila['idUsuario'];
				$nombre = $fila['nombre'];
				$apellido1 = $fila['apellido1'];
				$apellido2 = $fila['apellido2'];					
				$rol = $fila['rol'];
				$fechaNacimiento = $fila['fechaNacimiento'];
				$nivelGDS = $fila['nivelGDS'];
				}
			?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Editar Usuario</title>
	<link href="styleAccion.css" rel = "stylesheet" type="text/css">
</head>


</h1><p class="titulo" id="titulo">Borrar Usuario</p></h1>

<body>
	<div class="container">
		<div class="login-container">
		  <div class="register">
			<table style="width:100%">
			  <tr>
				<td>ID del Usuario</td>
				<td><input type="text" placeholder="Usuario" value="<?php echo $idUsuario ?>" readonly></td>
			  </tr>
			  <tr>
				<td>Nombre</td>
				<td><input type="text" placeholder="Nombre" value="<?php echo $nombre ?>" readonly></td>
			  </tr>
			  <tr>
				<td>1º Apellido</td>
				<td>
					<input type="text" placeholder="Apellido1" value="<?php echo $apellido1 ?>" readonly>
				</td>
			  </tr>
			  <tr>
				<td>2º Apellido</td>
				<td><input type="text" placeholder="Apellido2" value="<?php echo $apellido2 ?>" readonly></td>
			  </tr>
			  <tr>
				<td>Rol</td>
				<td>
					<input type="text" placeholder="Rol" value="<?php echo $rol ?>" readonly>
				</td>
			  </tr>
			  <tr>
				<td>Fecha de Nacimiento</td>
				<td><input type="text" placeholder="Fecha" value="<?php echo $fechaNacimiento ?>" readonly></td>
			  </tr>
			  <tr>
				<td>Nivel GDS</td>
				<td>
					<input type="text" placeholder="Nivel GDS" value="<?php echo $nivelGDS ?>" readonly>
				</td>
			  </tr>
			  <tr>
			  </table>
			  <br><h2>¿Quieres borrar este usuario?<h2>
			  <table style="width:100%">
			  <tr>
				<td>
					<form action="listaUsuarios.php">
						<input type="submit" value="Cancelar" class="sessionButton"/>
					  </form>
				</td>
				<td>
					<form action="borraUsuario.php">
						<input type="submit" value="Borrar" class="sessionButton"/> 
					</form>
				</td>
			  </tr>
			</table>
		  </div>
		</div>
	  </div>
</body>
</html>

		