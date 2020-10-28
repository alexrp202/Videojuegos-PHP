
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">
	
</head>
<header>

	<img  src="./imagenes/1.jpg"class="d-block w-100" alt="..."width="300" height="300">
		
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="./alta.html">Inicio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	  
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item active">
			  <a class="nav-link" href="./index.php">Catalogo <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Link</a>
			</li>
		
		</div>
	  </nav>
</header>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-5">Informacion</h1>
    <p class="lead">
<?php

header("Content-Type: text/html;charset=utf-8");

//Parámetros que vienen del POST



$Titulo=$_POST["Titulo"];
$Genero=$_POST["Genero"];
$Ano=$_POST["Ano"];
$Plataforma=$_POST["Plataforma"];
$Pegi=$_POST["Pegi"]; 
$Desarrollador=$_POST["Desarrollador"];


//Parámetros de conexión
$servidor="localhost";
$usuario="root";
$contraseña="usbw";
$bd="test";

//realizamos la conexión
$conexion=mysqli_connect($servidor,$usuario,$contraseña,$bd);
if(!$conexion)
{
	die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
}
else
{
	mysqli_set_charset($conexion,"utf8");
	echo "Felicidades! Estas conectado a la BD";
	$_SESSION["con"]=$conexion;
}


	$consulta=mysqli_query($conexion,"insert into videojuegos values('$Titulo','$Genero','$Ano','$Plataforma','$Pegi','$Desarrollador')");

	echo "<br>";
if(!$consulta)
{
	die("awiki wiki");
}
else
{
		echo "Datos insertados!";
}


?>
</p>
  </div>
</div>
