<?php

	
session_start();
		
		if(!isset($_SESSION["nick_logueado"])){
			?>
			<script type="text/javascript">
			alert("No estas logueado");
			window.location.href='../login.html';
				</script>
				<?php	
		}
		$nick=$_SESSION["nick_logueado"];
	

	ModificarProducto($_GET['id'], $_POST['name'], $_POST['password'], $_POST['email'], $_POST['phone'], $_POST['address'] );

	function ModificarProducto($id,$name,$password_cifrada,$email,$phone,$address)
	{
		$password_cifrada=password_hash($_POST['password'], PASSWORD_DEFAULT);
		include 'u_conexion.php';
		echo $sentencia="UPDATE clientes 
		SET id='".$id."',name='".$name."',password='".$password_cifrada."',email='".$email."',phone='".$phone."',address='".$address."'
		WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='u_index.php';
</script>