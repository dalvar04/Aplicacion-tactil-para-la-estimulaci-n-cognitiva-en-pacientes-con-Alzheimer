<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Ejercicio Facil</title>
	<link href="styleEjercicio.css" rel = "stylesheet" type="text/css">
	<script src="myscriptFaci.js"></script>
</head>

<body>  
    <p class="titulo" id="titulo">Pulsa en los circulos rojos</p>

		<div class ="izquierda" id="izquierda">
			<li id="clicks">PUNTUACIÓN: 0</li>
      <li id="regre">Circulos rojos restantes: 2</li>
		</div>


    <?php
        session_start();
		    $prueba = date("s");
        $_SESSION['dia']=date("d");
        $_SESSION['mes']=date("m");
        $_SESSION['anyo']=date("Y");
        $_SESSION['hora']=date("G")+2;
        $_SESSION['minuto']=date("i");
        $_SESSION['segundo']=date("s");
        $_SESSION['idEjercicio']=1;
        $_SESSION['puntuacion']=0;	
		
        class puntaje{
          public function setPuntos($dato){
            $_SESSION['puntuacion']=$dato[0];
			      $_SESSION['hor']=$dato[1];
			      if($dato[2]<10) $_SESSION['min']="0".$dato[2];
			      else $_SESSION['min']=$dato[2];
			      if($dato[3]<10) $_SESSION['seg']="0".$dato[3];
			      else $_SESSION['seg']=$dato[3];
          }
        }

   ?>


<svg width="1300" height="530">
  <circle id="rojo1" cx="450" cy="100" r="50" stroke="black" stroke-width="4" fill="red" />
  <circle id="rojo2" cx="420" cy="375" r="50" stroke="black" stroke-width="4" fill="red" />
  <circle id="azul1" cx="550" cy="450" r="50" stroke="black" stroke-width="4" fill="blue" />
  <circle id="azul2" cx="900" cy="350" r="50" stroke="black" stroke-width="4" fill="blue" />
</svg>

</body>
</html>