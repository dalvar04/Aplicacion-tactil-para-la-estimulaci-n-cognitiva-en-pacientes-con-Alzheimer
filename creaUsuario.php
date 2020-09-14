<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Crear Usuario</title>
	<link href="styleCreaUsuario.css" rel = "stylesheet" type="text/css">
</head>


</h1><p class="titulo" id="titulo">Crear Usuario</p></h1>

<body>
	<div class="container">
		<div class="login-container">
		  <div class="register">
		  	<form action="insertaUsuario.php" method="post">
			  <table style="width:100%">
				<td>Nombre</td>
				<td><input type="text" name="nombre" placeholder="Nombre" required></td>
			  </tr>
			  <tr>
				<td>1º Apellido</td>
				<td>
					<input type="text" name="apellido1" placeholder="Apellido1" required>
				</td>
			  </tr>
			  <tr>
				<td>2º Apellido</td>
				<td><input type="text" name="apellido2" placeholder="Apellido2" required></td>
			  </tr>
			  <tr>
				<td>Fecha de Nacimiento</td>
				<td><input type="date" name="fecha" placeholder="yyyy-mm-dd" min="1900-01-01" max="2020-12-31" required></td>
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
			  </table><br><br>
			  <p><input type="submit" value="Crear Usuario"></p>
			  </form>
			  <form action="listaUsuarios.php">
				<input type="submit" value="Volver" id="volver" class="sessionButton"/> 
			</form>
		  </div>
		</div>
	  </div>
</body>
</html>

		