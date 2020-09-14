<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link href="styleElige.css" rel = "stylesheet" type="text/css">
	<script src="myscriptElige.js"></script>
</head>


<body>

<?php
    session_start();
    $idUsuario=$_SESSION['idUsuario'];
    $idEjercicio=$_SESSION['idEjercicio'];
    $dia=$_SESSION['dia'];
    $mes=$_SESSION['mes'];
    $anyo=$_SESSION['anyo'];
    $hora=$_SESSION['hor'];
    $minuto=$_SESSION['min'];
    $segundo=$_SESSION['seg'];
    $diaF=$_SESSION['diaF'];
    $mesF=$_SESSION['mesF'];
    $anyoF=$_SESSION['anyoF'];
    $horaF=$_SESSION['horaF'];
    $minutoF=$_SESSION['minutoF'];
    $segundoF=$_SESSION['segundoF'];
    $puntuacion=$_SESSION['puntuacion'];

    $conexion=mysqli_connect("localhost","root","");
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }else{
        mysqli_select_db($conexion,"proyecto") or die ("Fallo al conectar con la BBDD");
        mysqli_set_charset($conexion,"utf8");
        $consulta="INSERT INTO resuelto VALUES (NULL,'$idUsuario','$idEjercicio','$anyo-$mes-$dia $hora:$minuto:$segundo','$anyoF-$mesF-$diaF $horaF:$minutoF:$segundoF','$puntuacion')";
        $resultado=mysqli_query($conexion,$consulta);

        if($resultado==false){
            echo "Error en la consulta";
        }else{
            header("location:menuUsuario.php");
        }
    }

    mysqli_close($conexion);

?>

</body>

</html>