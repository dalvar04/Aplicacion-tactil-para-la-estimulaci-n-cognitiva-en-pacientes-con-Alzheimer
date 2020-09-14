<?php
	include 'eDificil.php';
	$base= new Puntaje();
	$dato=$_POST['dato'];
	$registros = $base->setPuntos($dato);
	echo $registros;
?>