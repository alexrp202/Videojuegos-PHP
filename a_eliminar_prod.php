<?php
	EliminarVid($_GET['id']);

	function EliminarVid($id)
	{
		include 'a_conexion.php';
		$sentencia="DELETE FROM mis_productos WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Videojuego Eliminado!!");
	window.location.href='a_index.php';
</script>