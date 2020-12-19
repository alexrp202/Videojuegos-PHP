<?php

	
session_start();
		
		if(!isset($_SESSION["nick_logueado"])){
			?>
			<script type="text/javascript">
			alert("No estas logueado");
			window.location.href='./login.html';
				</script>
				<?php	
		}
		$nick=$_SESSION["nick_logueado"];
	
$name=$_POST["name"];
$description=$_POST["description"];
$Genero=$_POST["Genero"];
$Ano=$_POST["Ano"];
$Plataforma=$_POST["Plataforma"];
$PEGI=$_POST["PEGI"]; 
$Desarrollador=$_POST["Desarrollador"];
$precio=$_POST["precio"];
$image = $_FILES['image']['tmp_name'];
$imgContenido = addslashes(file_get_contents($image));

	NuevoVideojuego($name,$description,$Genero,$Ano,$Plataforma,$PEGI,$Desarrollador,$precio,$imgContenido);
	
	function NuevoVideojuego($name,$description,$Genero,$Ano,$Plataforma,$PEGI,$Desarrollador,$precio,$imgContenido)
	{
		include 'a_conexion.php';
		$sentencia= "insert into mis_productos (id,name,description,Genero,Ano,Plataforma,PEGI,Desarrollador,price,imagenes) values(null,'$name','$description','$Genero','$Ano','$Plataforma','$PEGI','$Desarrollador','$precio','$imgContenido')";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Videojuego Ingresado Exitosamante!!");
	window.location.href='a_index.php';
</script>