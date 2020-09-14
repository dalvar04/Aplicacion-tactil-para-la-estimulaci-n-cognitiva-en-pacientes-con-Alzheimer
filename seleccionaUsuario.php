<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>INICIO</title>
	<link href="styleInicio.css" rel = "stylesheet" type="text/css">
</head>
	
	<body>
		<div class="container">
		  <div class="login-container">
			<div class="register">
			  <h2>Seleccionar Usuario</h2>
			  <form action="estadisticasUsuario.php" method="post" name="idBusca">
				<input type="text" placeholder="Usuario" name="idBusca" required>
				<input type="submit" name="enviar" value="Acceder"/>
			  </form>
			  <br><br><br><form action="menuAdmin.php">
					<input type="submit" value="Volver" id="menu" class="sessionButton"/> 
			  </form>
			</div>
		  </div>
		</div>
	 </body>
</html>