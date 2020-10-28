<?php

$id=$_POST["id"];
$Titulo=$_POST["Titulo"];
$Genero=$_POST["Genero"];
$Ano=$_POST["Ano"];
$Plataforma=$_POST["Plataforma"];
$PEGI=$_POST["PEGI"]; 
$Desarrollador=$_POST["Desarrollador"];

	NuevoVideojuego($id,$Titulo,$Genero, $Ano,$Plataforma,$PEGI,$Desarrollador);
	
	function NuevoVideojuego($id,$Titulo,$Genero, $Ano,$Plataforma,$PEGI,$Desarrollador)
	{
		include 'a_conexion.php';
		$sentencia= "insert into videojuegos values('$id','$Titulo','$Genero','$Ano','$Plataforma','$PEGI','$Desarrollador')";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Videojuego Ingresado Exitosamante!!");
	window.location.href='a_index.php';
</script>