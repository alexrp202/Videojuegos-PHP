<?php
$name=$_POST["name"];
$description=$_POST["description"];
$Genero=$_POST["Genero"];
$Ano=$_POST["Ano"];
$Plataforma=$_POST["Plataforma"];
$PEGI=$_POST["PEGI"]; 
$Desarrollador=$_POST["Desarrollador"];
$precio=$_POST["precio"];

	NuevoVideojuego($name,$description,$Genero,$Ano,$Plataforma,$PEGI,$Desarrollador,$precio);
	
	function NuevoVideojuego($name,$description,$Genero,$Ano,$Plataforma,$PEGI,$Desarrollador,$precio)
	{
		include 'a_conexion.php';
		$sentencia= "insert into mis_productos (id,name,description,Genero,Ano,Plataforma,PEGI,Desarrollador,price) values(null,'$name','$description','$Genero','$Ano','$Plataforma','$PEGI','$Desarrollador','$precio')";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Videojuego Ingresado Exitosamante!!");
	window.location.href='a_index.php';
</script>