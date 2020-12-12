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
		
$name=$_POST["name"];
$password=$_POST["password"];
$password_cifrada=password_hash($password, PASSWORD_DEFAULT);
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"]; 

	NuevoVideojuego($name,$password,$email,$phone,$address);
	
	function NuevoVideojuego($name,$password_cifrada,$email,$phone,$address)
	{
		include 'u_conexion.php';
		$sentencia= "insert into clientes (id,name,password,email,phone,address) values(null,'$name','$password_cifrada','$email','$phone','$address')";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Videojuego Ingresado Exitosamante!!");
	window.location.href='u_index.php';
</script>