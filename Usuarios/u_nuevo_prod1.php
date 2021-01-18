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
        
        if (!($nick=="admin")){
            ?>
			<script type="text/javascript">
			alert("No eres admin");
			window.location.href='../login.html';
				</script>
                <?php	
               
		}
		?>
<!DOCTYPE html>
<html>

<head>
	<title>Nuevo Usuario</title>
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
			<a href="u_index.php"> <button class="btn btn-primary">Atras</button></a>
		</div>



	</div>


</body>

</html>