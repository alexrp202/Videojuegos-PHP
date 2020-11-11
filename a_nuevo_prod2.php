<?php
$id=$_GET["id"];
$name=$_POST["name"];
$Description=$_POST["Description"];
$Genero=$_POST["Genero"];
$Ano=$_POST["Ano"];
$Plataforma=$_POST["Plataforma"];
$PEGI=$_POST["PEGI"]; 
$Desarrollador=$_POST["Desarrollador"];
$precio=$_POST["precio"];

	NuevoVideojuego($id,$name,$Description,$Genero,$Ano,$Plataforma,$PEGI,$Desarrollador,$precio);
	
	function NuevoVideojuego($id,$name,$Descripcion,$Genero,$Ano,$Plataforma,$PEGI,$Desarrollador,$precio)
	{
		include 'a_conexion.php';
		$sentencia= "insert into mis_productos values('$id','$name','$Descripcion','$Genero','$Ano','$Plataforma','$PEGI','$Desarrollador','$precio')";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Videojuego Ingresado Exitosamante!!");
	window.location.href='a_index.php';
</script>