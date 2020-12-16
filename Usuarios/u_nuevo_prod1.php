<?php
include "u_conexion.php";

session_start();

if (!isset($_SESSION["nick_logueado"])) {
?>
	<script type="text/javascript">
		alert("No estas logueado");
		window.location.href = '../login.html';
	</script>
<?php
}
$nick = $_SESSION["nick_logueado"];
?>

<!DOCTYPE html>
<html>

<head>
	<title>Header</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Header-Nightsky.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
	<div class="header-nightsky">
		<nav class="navbar navbar-default">
			<div class="container">
				<a class="navbar-brand" href="#"><img style="width: 50%;" src="../imagenes/gitfuck.png" alt=""></a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../productos/a_index.php">Gestionar Productos</a></li>
						<li><a href="../usuarios/u_index.php">Gestionar Usuarios</a></li>
						<li><a href="../carrito/index.php">Mostrar Carrito</a></li>
						<li><a href="../xml/menuxml.php">XML</a></li>
						<li><a href="../excel/menuexcel.php">CSV</a></li>




					</ul>
				</div>
			</div>
		</nav>
		<div class="hero">
			<h1>Crear Usuario</h1>

			<br><br>
			<div class="todo ">


				<br>

				<form class="container" action="u_nuevo_prod2.php" method="post" style="border-collapse: separate; border-spacing: 10px 5px;" class="p-4">



					<h3>Nombre</h3>
					<div class="form-group" id="user-group">
						<input type="text" name="name" class="form-control" placeholder="Nombre de usuario" minlength="5" maxlength="40" required>
					</div>
					<h3>Contraseña</h3>
					<div class="form-group" id="contrasena-group">
						<input type="password" name="password" class="form-control" placeholder="Contraseña" minlength="8" required>
					</div>
					<h3>Email</h3>
					<div class="form-group" id="email-group">
						<input type="email" name="email" class="form-control" placeholder="Intruduce tu email" required>
					</div>

					<h3>Telefono</h3>
					<div class="form-group" id="tel-group">
						<input type="tel" pattern="[0-9]{9}" name="phone" class="form-control" placeholder="Intruduce tu telefono" required>
					</div>

					<h3>Direccion</h3>
					<div class="form-group" id="direccion-group">
						<input type="text" name="address" class="form-control" placeholder="Intruduce tu direccion" minlength="8" required>
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
				</form>
			</div>

		</div>



	</div>


</body>

</html>