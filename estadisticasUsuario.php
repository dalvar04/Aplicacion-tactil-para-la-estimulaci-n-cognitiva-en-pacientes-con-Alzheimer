<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>PUNTUACIONES</title>
	<link href="styleEstadisticas.css" rel = "stylesheet" type="text/css">
</head>


</h1><p class="titulo" id="titulo">PUNTUACIONES</p></h1>

<body>
	<div class="container">
		<div class="login-container">
		  <div class="register">
		  <table style="text-align:center;" border="1">
				<tr>
					<th>idUsuario<th>
					<th>idEjercicio<th>
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

			if(isset($_POST['idBusca'])){
				$_SESSION['id']=$_POST['idBusca'];
			 }

			$id=$_SESSION['id'];
			mysqli_select_db($conexion,"proyecto") or die ("Fallo al conectar con la BBDD");
			mysqli_set_charset($conexion,"utf8");
			$base=new PDO("mysql:host=localhost; dbname=proyecto" , "root", "");
			$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sqlTotal="SELECT * FROM resuelto WHERE idUsuario='$id' ORDER BY fechaInicio";
			$resultado=$base->prepare($sqlTotal);
			$resultado->execute();
			$numero_registro=$resultado->rowCount();

			$tam_pag=5;

			if(isset($_GET["pagina"])){
				if($_GET["pagina"]==1){
					header("location:estadisticasUsuario.php");
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
			$sql_limite = "SELECT * FROM resuelto WHERE idUsuario='$id' ORDER BY fechaInicio LIMIT $inicio,$tam_pag";
			$resultadoL=$base->prepare($sql_limite);
			$resultadoL->execute(array());

			while($fila=$resultadoL->fetch(PDO::FETCH_ASSOC)){
			?>

			<tr>
				<td><?php echo $fila['idUsuario'] ?><td>
				<td><?php echo $fila['idEjercicio'] ?><td>
				<td><?php echo $fila['fechaInicio'] ?><td>
				<td><?php echo $fila['fechaFin'] ?><td>
				<td><?php echo $fila['puntuacion'] ?><td>
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
				</br></br></br><form action="menuAdmin.php">
						<input type="submit" value="Volver" id="menu" class="sessionButton"/> 
				</form>

				
		  </div>
		</div>
	</div>
</body>
</html>				