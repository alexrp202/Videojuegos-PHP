<?php
	
	session_start();
	$nick=$_SESSION["nick_logueado"];
$logueado=0;
	
header("Content-Type: text/html;charset=utf-8");


		$name = $_POST["nick"];
		$password = $_POST["password"];
		echo $nick;

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

	if (!strcmp($password2 , $password) == 0){
			echo "Contraseña incorrecta";
	}
	
	else{
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
	window.location.href='./carrito/index.php';

		</script>
		<?php	
		}?>

		
		<?php
		
		
		$logueado=1;
	}
	}
	
	





?>