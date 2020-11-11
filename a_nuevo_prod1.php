<?php
include "a_conexion.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alta de Producto</title>
	<style type="text/css">
		@import url("css/mycss.css");
	</style>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="todo ">

		<img src="./imagenes/1.jpg" class="d-block w-100"  width="400" height="400">
		<h2> Nuevo Videojuego </h2>
		<br>

		<form action="a_nuevo_prod2.php" method="post" style="border-collapse: separate; border-spacing: 10px 5px;" class="p-4">
			Titulo: <input type="text" class="form-control" name="name" placeholder="Introducir Titulo" /><br>
			<div class="form-group">
				<label for="Descripcion">Descripcion</label>
				<textarea class="form-control" name="description" id="description" rows="3"></textarea>
			</div>

			<label for="Genero">Genero</label>
			<select class="form-control" name="Genero">
				<option>Terror</option>
				<option>Accion</option>
				<option>Aventura</option>
				<option>Puzzle</option>
				<option>Estrategia</option>
			</select>
			<br>
			Año: <input type="number" class="form-control" name="Ano" placeholder="Introducir Año"><br>
			Plataforma: <input type="text" class="form-control" name="Plataforma" placeholder="Introducir Plataforma" /><br>
			Pegi: <input type="number" class="form-control" name="PEGI" placeholder="Introducir Pegi" /><br>
			Desarrollador: <input type="text" class="form-control" name="Desarrollador" placeholder="Introducir Desarrollador" /><br>
			Precio: <input type="number" class="form-control" name="precio" placeholder="Introducir precio" /><br>
			<br>
			<input type="submit" value="Entrar" />
		</form>
	</div>

	</div>

	<div id="footer">
		<img src="images/swirl2.png" id="img2">
	</div>

	</div>


</body>

</html>