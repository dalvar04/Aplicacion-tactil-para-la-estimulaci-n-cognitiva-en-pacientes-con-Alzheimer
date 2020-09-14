<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Eleccion ejercicio</title>
	<link href="styleElige.css" rel = "stylesheet" type="text/css">
	<script src="myscriptElige.js"></script>
</head>


<body>

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
    $nombre=$_SESSION['nombre'];
    echo $nombre;
    $consulta="SELECT * FROM usuario WHERE nombre='$nombre'";
    $resultado=mysqli_query($conexion,$consulta);
	while($fila=mysqli_fetch_row($resultado)){
        $_SESSION['idUsuario']=$fila[0]; 
        $rol=$fila[4]; 
        if($rol=="Usuario"){
            header("location:menuUsuario.php");
        }else if ($rol=="Administrador"){
            header("location:menuAdmin.php");
        }else{
            echo "ERROR";
        } 
    }
    

?>
	
</body>
</html>