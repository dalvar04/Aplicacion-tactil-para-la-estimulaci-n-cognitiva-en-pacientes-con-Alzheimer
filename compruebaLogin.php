<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>Eleccion ejercicio</title>
</head>


<body>

<?php

try{
    $conexion=mysqli_connect("localhost","root","proyecto","");
    $base=new PDO("mysql:host=localhost; dbname=proyecto" , "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM usuario WHERE nombre= :login";
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["login"]));
    $resultado->bindValue(":login",$login);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){
        session_start();
        $_SESSION["nombre"] = $_POST["login"];
        header("location:identificador.php");
    }else{
        header("location:inicio.php");
    }


}catch(Exception $e){
    die("Error: " . $e->getMessage());
}

?>
	
</body>
</html>