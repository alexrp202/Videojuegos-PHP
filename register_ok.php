<?php
header("Content-Type: text/html;charset=utf-8");
if (isset($_POST["nick"]))
{
	$name = $_POST["nick"];
	$password = $_POST["password"];
	$password_cifrada=password_hash($password, PASSWORD_DEFAULT);
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];



	$con = mysqli_connect("localhost","root","usbw","test");
	
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos"."<br>";
	}
	//////////////////////////////////////
	
	//Inserción de datos
	
	//Primero compruebo si el nick existe
	$instruccion = "select count(*) as cuantos from clientes where name = '$name'";
	$res = mysqli_query($con, $instruccion);
	$datos = mysqli_fetch_assoc($res);
	
	if ($datos['cuantos'] == 0)
	{
		$instruccion = "INSERT INTO clientes(id,name,password,email,phone,address)
		VALUES (NULL ,'$name','$password_cifrada','$email','$telefono','$direccion');";
		$res = mysqli_query($con, $instruccion);
		if (!$res)
		{
			die("No se ha pordido crear el usuario");
		}
		else
		{
			echo "Usuario creado";
			//me lleva al login para que pruebe mi contraseña
			echo "<script>alert('Usuario creado correctamente');</script>";
			include_once("login.html");
		}
	}
	else
	{?>
	
			<script type="text/javascript">
			alert("Este nick no está disponible");
			window.location.href='register.html';
			</script>

		<?php
	}

}
else 
{
	echo ("ERROR: No se puede introducir un nick en blanco");
}
?>