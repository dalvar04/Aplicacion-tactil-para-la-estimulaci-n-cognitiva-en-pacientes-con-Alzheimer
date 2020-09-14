<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Eleccion ejercicio</title>
	<link href="styleElige.css" rel = "stylesheet" type="text/css">
	<script src="myscriptElige.js"></script>
</head>


</h1><p class="titulo" id="titulo">Menú de Usuario</p></h1>

<body>
	<div class="container">
		<div class="login-container">
		  <div class="register">
			<table style="width:100%">
			  <tr>
				<td>
					<form action="eFacil.php">
						<input type="submit" value="Ejercicio Fácil" id="facil" class="sessionButton"/>
				  	</form>
				</td>
				<td>
					<form action="eVariasFormas.php">
						<input type="submit" value="Ejercicio con varias formas" id="dificil" class="sessionButton"/> 
					</form>
				</td>
			  </tr>
			  <tr>
				<td>
					<form action="eMedio.php">
						<input type="submit" value="Ejercicio Medio" id="medio" class="sessionButton"/>
					</form>
				</td>
				<td>
				<form action="escogePuntuaciones.php">
						<input type="submit" value="Mejores Puntuaciones" id="medio" class="sessionButton"/>
					</form>
				</td>
			  </tr>
			  <tr>
				<td>
					<form action="eDificil.php">
						<input type="submit" value="Ejercicio Difícil" id="dificil" class="sessionButton"/>
					  </form>
				</td>
				<td>
					<form action="inicio.php">
						<input type="submit" value="Volver" id="volver" class="sessionButton"/> 
					</form>
				</td>
			  </tr>
			</table>
		  </div>
		</div>
	  </div>
</body>
</html>

		