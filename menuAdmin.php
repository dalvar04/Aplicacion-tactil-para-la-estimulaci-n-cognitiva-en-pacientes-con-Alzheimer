<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Menu Admin</title>
	<link href="styleElige.css" rel = "stylesheet" type="text/css">
	<script src="myscriptElige.js"></script>
</head>


</h1><p class="titulo" id="titulo">Menú de administrador</p></h1>

<body>
	<div class="container">
		<div class="login-container">
		  <div class="register">
			<form action="listaUsuarios.php">
				<input type="submit" value="Lista de Usuarios" id="facil" class="sessionButton"/>
			</form>
			<form action="seleccionaUsuario.php">
				<input type="submit" value="Estadísticas" id="facil" class="sessionButton"/>
			</form>
			<form action="inicio.php">
				<input type="submit" value="Volver" id="volver" class="sessionButton"/> 
			</form>
		  </div>
		</div>
	  </div>
</body>
</html>

		