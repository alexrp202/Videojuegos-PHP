<?php
	EliminarVid($_GET['id']);

	function EliminarVid($id)
	{
		include 'u_conexion.php';
		$sentencia="DELETE FROM clientes WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Videojuego Eliminado!!");
	window.location.href='u_index.php';
</script>