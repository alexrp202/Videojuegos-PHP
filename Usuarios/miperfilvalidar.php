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
        
	  
		
$password=$_POST['password'];
ModificarProducto($_GET['id'], $_POST['name'],$password_cifrada=password_hash($password, PASSWORD_DEFAULT), $_POST['email'], $_POST['phone'], $_POST['address'] );

	function ModificarProducto($id,$name,$password_cifrada,$email,$phone,$address)
	{
		include 'u_conexion.php';
		echo $sentencia="UPDATE clientes SET name='".$name."',password='".$password_cifrada."',email='".$email."',phone='".$phone."',address='".$address."'WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos actualizados exitosamante, porfavor logueese de nuevo");
	window.location.href='../logout.php';
</script>