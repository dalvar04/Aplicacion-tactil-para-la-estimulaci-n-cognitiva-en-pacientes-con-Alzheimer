<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>PUNTUACIONES</title>
	<link href="stylePuntuaciones.css" rel = "stylesheet" type="text/css">
</head>


</h1><p class="titulo" id="titulo">TOP 10 EJERCICIO MEDIO</p></h1>

<body>
	<div class="container">
		<div class="login-container">
		  <div class="register">
			<table style="text-align:center;" border="1">
				<tr>
					<th>idUsuario<th>
					<th>Fecha Inicio<th>
					<th>Fecha Fin<th>
					<th>Puntuacion<th>
				</tr>

		<?php
			session_start();
			$conexion=mysqli_connect("localhost","root","");
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}else{
		
			}

			mysqli_select_db($conexion,"proyecto") or die ("Fallo al conectar con la BBDD");
			mysqli_set_charset($conexion,"utf8");
			$consulta="SELECT * FROM resuelto WHERE idEjercicio=2 ORDER BY puntuacion DESC LIMIT 0,10";
			$resultado=mysqli_query($conexion,$consulta);
			while($fila=mysqli_fetch_array($resultado)){
			?>

			<tr>
				<td><?php echo $fila['idUsuario'] ?><td>
				<td><?php echo $fila['fechaInicio'] ?><td>
				<td><?php echo $fila['fechaFin'] ?><td>
				<td><?php echo $fila['puntuacion'] ?><td>
			</tr>
			<?php
			}
			?>
		</table>
				</br></br></br><form action="escogePuntuaciones.php">
						<input type="submit" value="Volver" id="menu" class="sessionButton"/> 
				</form>

		
		  </div>
		</div>
	</div>
</body>
</html>		