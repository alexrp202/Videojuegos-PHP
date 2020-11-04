<?php
	

	ModificarProducto($_GET['id'], $_POST['Titulo'], $_POST['Genero'], $_POST['Ano'], $_POST['Plataforma'], $_POST['PEGI'], $_POST['Desarrollador'] );

	function ModificarProducto($id, $Titulo,$Genero, $Ano,$Plataforma,$PEGI,$Desarrollador)
	{
		include 'a_conexion.php';
		echo $sentencia="UPDATE videojuegos SET Titulo='".$Titulo."', Genero='".$Genero."', Ano='".$Ano."', Plataforma='".$Plataforma."', PEGI='".$PEGI."', Desarrollador='".$Desarrollador."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='a_index.php';
</script>