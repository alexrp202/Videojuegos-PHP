<?php
include "a_conexion.php";


	
session_start();
		
		if(!isset($_SESSION["nick_logueado"])){
			?>
			<script type="text/javascript">
			alert("No estas logueado");
			window.location.href='./login.html';
				</script>
				<?php	
		}
		$nick=$_SESSION["nick_logueado"];
		
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
      <h1>Crear Producto</h1>

      <br><br>

      <div id="contenido">
        <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
         
          <br>
		  <form action="a_nuevo_prod2.php" method="post" style="border-collapse: separate; border-spacing: 10px 5px;" class="p-4">

		  <h3>Titulo</h3> <input type="text" class="form-control" name="name" placeholder="Introducir Titulo" /><br>
			<div class="form-group">
			<h3>Descripcion</h3>
				<textarea class="form-control" name="description" id="description" rows="3"></textarea>
			</div>

			<h3>Genero</h3>
			<select class="form-control" name="Genero">
				<option>Terror</option>
				<option>Accion</option>
				<option>Aventura</option>
				<option>Puzzle</option>
				<option>Estrategia</option>
			</select>
			<br>
			<h3>Año</h3> <input type="number" class="form-control" name="Ano" placeholder="Introducir Año"><br>
			<h3>Plataforma</h3> <input type="text" class="form-control" name="Plataforma" placeholder="Introducir Plataforma" /><br>
			<h3>PEGI</h3> <input type="number" class="form-control" name="PEGI" placeholder="Introducir Pegi" /><br>
			<h3>Desarrollador</h3> <input type="text" class="form-control" name="Desarrollador" placeholder="Introducir Desarrollador" /><br>
			<h3>Precio</h3> <input type="number" class="form-control" name="precio" placeholder="Introducir precio" /><br>
			<br>
			<input class='btn btn-primary' type="submit" value="Guardar" />
		</form>
      </div>
    </div>
  </div>
</body>
</html>