<?php
	include 'eMedio.php';
	$base= new Puntaje();
	$dato=$_POST['dato'];
	$registros = $base->setPuntos($dato);
	echo $registros;
?>