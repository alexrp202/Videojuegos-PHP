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