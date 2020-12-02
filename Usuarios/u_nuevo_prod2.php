<?php
$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"]; 

	NuevoVideojuego($name,$password,$email,$phone,$address);
	
	function NuevoVideojuego($name,$password,$email,$phone,$address)
	{
		include 'u_conexion.php';
		$sentencia= "insert into clientes (id,name,password,email,phone,address) values(null,'$name','$password','$email','$phone','$address')";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Videojuego Ingresado Exitosamante!!");
	window.location.href='u_index.php';
</script>