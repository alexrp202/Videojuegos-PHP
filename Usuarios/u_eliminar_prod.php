<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
		include 'u_conexion.php';
		$sentencia="DELETE FROM clientes WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script  type="text/javascript">
	
 alert('Usuario eliminado')

	window.location.href='u_index.php';
</script>