<?php

session_start();


$nick = $_SESSION["nick_logueado"];
$Preciof = 1;
$idf = 0;
$filtrar = "";
$Where = "";
$generos = "";
include '../Configuracion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>GITFUCK | Tienda Online</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/price-range.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">
		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><img src="../../imagenes/gitfuck.PNG" width="250px" alt="" /></li>
								<li><a class="active" href="#">Home</a></li>
								<li><a href="../VerCarta.php">Ver carrito</a></li>
								<?php

								if ($nick == "admin") { ?>
									<li><a href="../../menu_admin.php">Volver al menu principal</a></li>
									</>
								<?php
								} else { ?>

									<li><a href="../../menu_usuario.php">Volver al menu principal</a></li>
									</>
								<?php
								} ?>

							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							Bienvenido: <b><?php echo $nick ?></b>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	</header>

	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="">

		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Filtrar por: </h2>
						<div class="panel-group category-products" id="accordian">
							<!--category-productsr-->


							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<form method="get">

											<select class="form-control " style="width: auto;" name='seleccion'>
												<option selected disabled>Selecciona una</option>
												<option value='0'>Id</option>
												<option value='1'>Precio Mayor a menor</option>
												<option value='7'>Precio Menor a mayor</option>
												<option value='2'>Videojuegos de Terror</option>
												<option value='3'>Videojuegos de Accion</option>
												<option value='4'>Videojuegos de Aventura</option>
												<option value='5'>Videojuegos de Puzzles</option>
												<option value='6'>Videojuegos de Estrategia</option>

											</select>
											<br>
											<input type="submit" value="Filtrar" class="btn btn-success"></input>
										</form>
									</h4>
								</div>
							</div>


						</div>
						<!--/category-productsr-->
						<?php

						$ordenar = $_GET['seleccion'];


						if ($ordenar == 0) {
							$filtrar = "id";
							$query = $db->query("SELECT * FROM mis_productos ORDER BY $filtrar DESC LIMIT 10 ");
						} else if ($ordenar == 1) {
							$filtrar = "Precio mayor a menor";
							$query = $db->query("SELECT * FROM mis_productos ORDER BY price DESC LIMIT 10 ");
						} else if ($ordenar == 2) {
							$filtrar = "terror";
							$query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Terror' ");
						} else if ($ordenar == 3) {
							$filtrar = "Accion";
							$query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Accion' ");
						} else if ($ordenar == 4) {
							$filtrar = "Accion";
							$query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Aventura' ");
						} else if ($ordenar == 5) {
							$filtrar = "Puzzles";
							$query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Puzzles' ");
						} else if ($ordenar == 6) {
							$filtrar = "Estrategia";
							$query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Estrategia' ");
						} else if ($ordenar == 7) {
							$filtrar = "Precio menor a mayor";
							$query = $db->query("SELECT * FROM mis_productos ORDER BY price ASC LIMIT 10 ");
						}



						?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<h4>Filtrado por:<b> <?php echo $filtrar; ?></b></h4>
							</div>
						</div>


						<div class="shipping text-center">
							<!--shipping-->
							<img src="images/oferta.jpg" alt="" />
						</div>
						<!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<!--features_items-->
						<h2 class="title text-center">Nuestros Productos</h2>


						<?php
						//get rows query


						if ($query->num_rows > 0) {
							while ($row = $query->fetch_assoc()) {
						?>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src='ver.php?id=<?php echo $row['id'] ?>' alt='Img blob desde MySQL' style="max-width:100%;width:auto;height:auto;" />
												<h2><?php echo $row["price"] ?> €</h2>


											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2><?php echo $row["name"] ?></h2>
													<p>Descripcion: <br> <?php echo $row["description"] ?></p>
													<p>Genero: <?php echo $row["Genero"] ?></p>
													<p>Año <?php echo $row["Ano"] ?></p>
													<p>Plataforma <?php echo $row["Plataforma"] ?></p>
													<p>PEGI <?php echo $row["PEGI"] ?></p>
													<p>Desarrollador: <?php echo $row["Desarrollador"] ?></p>
													<a href="../AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
												</div>
											</div>
										</div>

									</div>
								</div>
							<?php }
						} else { ?>
							<p class="container">No hay productos disponibles</p>
						<?php } ?>
					</div>
					<!--features_items-->

				</div>
			</div>
		</div>
	</section>
	<br><br><br>

	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="pull-left">Copyright © 2021 GitFuck. Todos los derechos reservados.</p>
			</div>
		</div>
	</div>

	</footer>
	<!--/Footer-->



	<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
</body>

</html>