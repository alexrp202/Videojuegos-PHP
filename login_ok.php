<?php
	
	session_start();
	$logueado=0;
	
if(!isset($_POST["nick"])){
	?>
	<script type="text/javascript">
	alert("No estas logueado");
	window.location.href='./login.html';
		</script>
		<?php	
}







header("Content-Type: text/html;charset=utf-8");


		$name = $_POST["nick"];
		$password = $_POST["password"];
		$contador=0;

	$con = mysqli_connect("localhost","root","usbw","test");
	
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos" . "<br>";
	}
	
	$instruccion = "select count(*) as cuantos from clientes where name = '$name'";
	$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["cuantos"];
	}
	if($numero==0){
		echo "El usuario no existe";
	}
	else{
	$instruccion = "select password as cuantos from clientes where name = '$name'";
	$resultado = mysqli_query($con, $instruccion);

	while ($fila = $resultado->fetch_assoc()) {
		$password2=$fila["cuantos"];
	}
	
	/////////////////

	if(password_verify($password, $password2)) {
		echo "Login OK";
		$_SESSION["nick_logueado"]=$name;
		?> 
		
		<?php
		if($name=="admin"){?>
	 <script type="text/javascript">
	alert("Bienvenido Admin");
	window.location.href='menu_admin.php';
		</script> 
		<?php
		}
		else{?>

	<script type="text/javascript">
	alert("Bienvenido <?php echo $name?>");
	window.location.href='menu_usuario.php';

		</script>
		<?php
	}
}

	else{
		?>
		<script type="text/javascript">
		alert("Contraseña incorrecta");
		window.location.href='login.html';
		</script>	
		<?php
		}
}

	?>

	

		
		<?php
		
		
		$logueado=1;
	
	





?>