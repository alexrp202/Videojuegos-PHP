<?php
include "u_conexion.php";

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
		?>


<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nuevo Usuarios</title>
	<style type="text/css">
		@import url("css/mycss.css");
	</style>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="todo ">

		<img src="./imagenes/1.jpg" class="d-block w-100"  width="400" height="400">
		<h2> Nuevo Usuario </h2>
		<br>

		<form action="u_nuevo_prod2.php" method="post" style="border-collapse: separate; border-spacing: 10px 5px;" class="p-4">
		<label>Id </label>
          <input type="text" disabled class="form-control" name="name" ><br>
          

                    <div class="form-group" id="user-group">
                        <input type="text" name="name" class="form-control" placeholder="Nombre de usuario"  minlength="5" maxlength="40" required >
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" minlength="8" required > 
					</div>
				
					<div class="form-group" id="email-group">
                        <input type="email" name="email" class="form-control" placeholder="Intruduce tu email" required > 
					</div>

					<div class="form-group" id="tel-group">
                        <input type="tel" pattern="[0-9]{9}"   name="phone" class="form-control" placeholder="Intruduce tu telefono" required > 
					</div>

					<div class="form-group" id="direccion-group">
                        <input type="text" name="address" class="form-control" placeholder="Intruduce tu direccion" minlength="8" required > 
          </div>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
		</form>
	</div>

	</div>

	<div id="footer">
		<img src="images/swirl2.png" id="img2">
	</div>

	</div>


</body>

</html>