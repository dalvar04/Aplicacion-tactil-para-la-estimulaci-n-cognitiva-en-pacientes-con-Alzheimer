<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Ejercicio con varias formas</title>
	<link href="styleEjercicio.css" rel = "stylesheet" type="text/css">
	<script src="myscriptFormas.js"></script>
</head>

<body>  
    <p class="titulo" id="titulo">Pulsa en los circulos rojos</p>

		<div class ="izquierda" id="izquierda">
			<li id="clicks">PUNTUACIÓN: 0</li>
      <li id="regre">Circulos rojos restantes: 5</li>
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
        $_SESSION['idEjercicio']=4;
        $_SESSION['puntuacion']=0;	
		
        class puntaje{
          public function setPuntos($dato){
            $_SESSION['puntuacion']=$dato[0];
			      $_SESSION['hor']=$dato[1];
			      if($dato[2]<10) $_SESSION['min']="0".$dato[2];
			      else $_SESSION['min']=$dato[2];
			      if($dato[3]<10) $_SESSION['seg']="0".$dato[3];
			      else $_SESSION['seg']=$dato[3];
            echo $dato;
          }
        }

   ?>


<svg width="1300" height="520">
  <rect id="rojo1" x="1000" y="200" width="50" height="50" stroke="black" stroke-width="4" fill="red" />
  <polygon id="rojo2"  points="465,90 490,150 440,150" stroke="black" stroke-width="4" fill="red" />
  <circle id="rojo3" cx="750" cy="200" r="25" stroke="black" stroke-width="4" fill="red" />
  <circle id="rojo4" cx="250" cy="400" r="25" stroke="black" stroke-width="4" fill="red" />
  <circle id="rojo5" cx="1050" cy="400" r="25" stroke="black" stroke-width="4" fill="red" />
  <circle id="rojo6" cx="150" cy="300" r="25" stroke="black" stroke-width="4" fill="red" />
  <circle id="rojo7" cx="1100" cy="100" r="25" stroke="black" stroke-width="4" fill="red" />
  <circle id="azul1" cx="150" cy="450" r="25" stroke="black" stroke-width="4" fill="blue" />
  <circle id="azul2" cx="500" cy="250" r="25" stroke="black" stroke-width="4" fill="blue" />
  <circle id="azul3" cx="600" cy="400" r="25" stroke="black" stroke-width="4" fill="blue" />
  <circle id="azul4" cx="180" cy="100" r="25" stroke="black" stroke-width="4" fill="blue" />
  <rect id="azul5" x="1200" y="200" width="50" height="50" stroke="black" stroke-width="4" fill="blue"/>
  <circle id="azul6" cx="900" cy="300" r="25" stroke="black" stroke-width="4" fill="blue" />
  <circle id="azul7" cx="300" cy="300" r="25" stroke="black" stroke-width="4" fill="blue" />
  <circle id="amarillo1" cx="400" cy="400" r="25" stroke="black" stroke-width="4" fill="yellow" />
  <circle id="amarillo2" cx="300" cy="200" r="25" stroke="black" stroke-width="4" fill="yellow" />
  <polygon id="amarillo3" points="665,240 690,300 640,300" stroke="black" stroke-width="4" fill="yellow" />
  <circle id="amarillo4" cx="900" cy="100" r="25" stroke="black" stroke-width="4" fill="yellow" />
  <circle id="amarillo5" cx="800" cy="400" r="25" stroke="black" stroke-width="4" fill="yellow" />
  <rect id="amarillo6" x="600" y="100" width="50" height="50" stroke="black" stroke-width="4" fill="yellow" />
  <rect id="amarillo7" x="1200" y="350" width="50" height="50" stroke="black" stroke-width="4" fill="yellow" /> 
</svg>


</body>
</html>