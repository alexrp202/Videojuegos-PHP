<?php
	ModificarProducto($_GET['id'], $_POST['name'], $_POST['password'], $_POST['email'], $_POST['phone'], $_POST['address'] );

	function ModificarProducto($id,$name,$password,$email,$phone,$address)
	{
		include 'u_conexion.php';
		echo $sentencia="UPDATE clientes SET id='".$id."',name='".$name."',password='".$password."',email='".$email."',phone='".$phone."',address='".$address."'WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='u_index.php';
</script>