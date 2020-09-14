<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>LISTA DE USUARIOS</title>
	<link href="styleUsuarios.css" rel = "stylesheet" type="text/css">
</head>


</h1><p class="titulo" id="titulo">LISTA DE USUARIOS</p></h1>

<body>
	<div class="container">
		<div class="login-container">
		  <div class="register">
			<table style="text-align:center; color=#ffffff;" border="1">
				<tr>
					<th>idUsuario<th>
					<th>Nombre<th>
					<th>1º Apellido<th>
					<th>2º Apellido<th>
					<th>Fecha de Nacimiento<th>
					<th>Nivel GDS<th>
					<th>Editar<th>
					<th>Borrar<th>
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
			$base=new PDO("mysql:host=localhost; dbname=proyecto" , "root", "");
			$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sqlTotal="SELECT * FROM usuario WHERE rol LIKE 'Usuario' ORDER BY idUsuario";
			$resultado=$base->prepare($sqlTotal);
			$resultado->execute();
			$numero_registro=$resultado->rowCount();

			$tam_pag=3;

			if(isset($_GET["pagina"])){
				if($_GET["pagina"]==1){
					header("location:listaUsuarios.php");
				}else{
					$pagina=$_GET["pagina"];
				}
			}else{
				$pagina=1;
			}

			$inicio=($pagina-1)*$tam_pag;

			$pagina=1;
			$total_paginas=ceil($numero_registro/$tam_pag);
			echo "Total: " .$numero_registro . " registros.<br><br><br>";


			$resultado->closeCursor();
			$sql_limite = "SELECT * FROM usuario WHERE rol LIKE 'Usuario' ORDER BY idUsuario LIMIT $inicio,$tam_pag";
			$resultadoL=$base->prepare($sql_limite);
			$resultadoL->execute(array());

			while($fila=$resultadoL->fetch(PDO::FETCH_ASSOC)){
			?>

				<tr>
				<td><?php echo $fila['idUsuario'] ?><td>
				<td><?php echo $fila['nombre'] ?><td>
				<td><?php echo $fila['apellido1'] ?><td>
				<td><?php echo $fila['apellido2'] ?><td>
				<td><?php echo $fila['fechaNacimiento'] ?><td>
				<td><?php echo $fila['nivelGDS'] ?><td>
				<td>
					<a href="confirmaEditaUsuario.php?id=<?php echo $fila['idUsuario'] ?>"><img src="https://image.flaticon.com/icons/png/512/1979/1979256.png" style= width:40px;height:40px/></a>
				<td>
				<td>
					<a href="confirmaBorradoUsuario.php?id=<?php echo $fila['idUsuario'] ?>"><img src="https://image.flaticon.com/icons/svg/1345/1345823.svg" style= width:40px;height:40px/></a>
				<td>
				</tr>
			<?php
			}
			?>
		</table><br>
		<div class="pagination">
		<?php
			//--------------------------PAGINACION------------------------------------
				for($i=1;$i<=$total_paginas;$i++){
					echo "<a href='?pagina=" . $i . "'>" .$i . "</a> ";
				}
			?>
		</div>

				</br></br><form action="creaUsuario.php">
						<input type="submit" value="Crear usuario" href="#" id="menu" class="sessionButton"/> 
				</form>
				<form action="menuAdmin.php">
						<input type="submit" value="Volver" href="#" id="menu" class="sessionButton"/> 
				</form>
		
		  </div>
		</div>
	</div>
</body>
</html>	