<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Final</title>
	<link href="styleFin.css" rel = "stylesheet" type="text/css">
  <script src="myscriptFin.js"></script>
  </head>

</h1><p class="titulo" id="titulo">Ejercicio completado</p></h1>

<body>  

  <div class="container">
		<div class="login-container">
		  <div class="register">
      

      <li id="idUsuario">Usuario:
      <?php
        session_start();
        $nombre=$_SESSION['nombre'];
        echo $nombre;
      ?>
      </li>
      
      <li id="idEjercicio">ID del ejercicio:
      <?php
        $idEjercicio=$_SESSION['idEjercicio'];
        echo $idEjercicio;
      ?>
      </li>

      <li id="inicio">Fecha y hora de inicio del ejercicio:
      <?php
        $dia=$_SESSION['dia'];
        $mes=$_SESSION['mes'];
        $anyo=$_SESSION['anyo'];
        $hora=$_SESSION['hor'];
        $minuto=$_SESSION['min'];
        $segundo=$_SESSION['seg'];

        if($hora>23){
          $hora=$hora-24;
          $dia=$dia+1;
        }

        echo $anyo;
        echo "-";
        echo $mes;
        echo "-";
        echo $dia;
        echo "  ";
        echo $hora;
        echo ":";
        echo $minuto;
        echo ":"; 
        echo $_SESSION['seg'];
      ?>

      </li>
  
      <li id="fin">Fecha y hora de fin del ejercicio: 
      <?php
        $diaF=date("d");
        $mesF=date("m");
        $anyoF=date("Y");
        $horaF=date("G")+2;
        $minutoF=date("i");
        $segundoF=date("s");
        $_SESSION['diaF']=$diaF;
        $_SESSION['mesF']=$mesF;
        $_SESSION['anyoF']=$anyoF;
        $_SESSION['horaF']=$horaF;
        $_SESSION['minutoF']=$minutoF;
        $_SESSION['segundoF']=$segundoF;

        if($horaF>23){
          $horaF=$horaF-24;
          $diaF=$diaF+1;
        }

        echo $anyoF;
        echo "-";
        echo $mesF;
        echo "-";
        echo $diaF;
        echo "  ";
        echo $horaF;
        echo ":";
        echo $minutoF;
        echo ":"; 
        echo $segundoF;
      ?>
    </li>
      <li id="puntos">Puntuación: 
      <?php
        if(!isset($_POST['envio'])){
		      echo $_SESSION['puntuacion'];
        }
      ?>

      </li></br></br></br>

      <form action="insertaBBDD.php">
			  <input type="submit" value="Volver al menú de ejercicios" id="menu" class="sessionButton"/>
      </form>
      <!--<form action="menuUsuario.php">
			  <input type="submit" value="Volver sin guardar" id="menu" class="sessionButton"/>
			</form>-->
  </div>

</body>
</html>