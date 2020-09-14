<?php
			session_start();
			$conexion=mysqli_connect("localhost","root","");
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}else{
		
			}

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


</h1><p class="titulo" id="titulo">Editar Usuario</p></h1>

<body>
	<div class="container">
		<div class="login-container">
		  <div class="register">
		  <form action="editaUsuario.php" method="post">
			<table style="width:100%">
			  <tr>
				<td>ID del Usuario</td>
				<td><input type="text" name="idUsuario" placeholder="Usuario" value="<?php echo $idUsuario ?>" readonly></td>
			  </tr>
			  <tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>" required></td>
			  </tr>
			  <tr>
				<td>1º Apellido</td>
				<td>
					<input type="text" name="apellido1" placeholder="Apellido1" value="<?php echo $apellido1 ?>" required>
				</td>
			  </tr>
			  <tr>
				<td>2º Apellido</td>
				<td><input type="text" name="apellido2" placeholder="Apellido2" value="<?php echo $apellido2 ?>" required></td>
			  </tr>
			  <tr>
				<td>Rol</td>
				<td>
					<input type="text" name="rol" placeholder="Rol" value="<?php echo $rol ?>" readonly>
				</td>
			  </tr>
			  <tr>
				<td>Fecha de Nacimiento</td>
				<td><input type="date" name="fecha" placeholder="yyyy-mm-dd" value="<?php echo $fechaNacimiento ?>" min="1900-01-01" max="2020-12-31" required></td>
			  </tr>
			  <tr>
				<td>Nivel GDS</td>
				<td>
					<select name="gds" size="1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
				</td>
			  </tr>
			  <tr>
			  </table><br>
			  <p><input type="submit" value="Editar Usuario"></p>
			  </form>
			</form>
			<form action="listaUsuarios.php">
				<input type="submit" value="Volver" id="volver" class="sessionButton"/> 
			</form>
		  </div>
		</div>
	  </div>
</body>
</html>

			