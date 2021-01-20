
<?php
	
session_start();
		
		if(!isset($_SESSION["nick_logueado"])){
			?>
 			<script type="text/javascript">
			alert("No estas logueado");
			window.location.href='./login.html';
 				</script>
 				<?php	
         }
         else if(!($_SESSION["nick_logueado"]=="admin")){
			?>
 			<script type="text/javascript">
			alert("No estas logueado");
			window.location.href='./login.html';
 				</script>
 				<?php	
 		}
		$nick=$_SESSION["nick_logueado"];
 		?>
		
		<html>
<head>
<title>Menu Admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- /Bootstrap --> 

</head>

 
 <!-- Font Awesome icons (free version)-->

 <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        
 <!-- Portfolio Grid-->
 <section class="page-section" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Menu Admin</h2>
                    <h3 class="section-subheading text-muted">Bienvenido/a <?php echo $nick?></h3>
                </div>
                <div class="row">
                <!-- TARJETAS -->
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="carrito/index/index.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="imagenes/carritousu.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tienda</div>
                                <div class="portfolio-caption-subheading text-muted">Ir a la tienda</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="productos/a_index.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="imagenes/producto.png" width="80%" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Administrar Productos</div>
                                <div class="portfolio-caption-subheading text-muted">Administracion de los Productos</div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="usuarios/u_index.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="imagenes/miperfil.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Administrar Perfiles de Usuarios</div>
                                <div class="portfolio-caption-subheading text-muted">Administracion de Usuarios</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="xml/menuxml.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <center><img class="img-fluid" width="60%" src="imagenes/XML.png" alt="" /></center>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Exportar a XML</div>
                                <div class="portfolio-caption-subheading text-muted">Eleccion de categoria para exportar a XML</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="excel/menuexcel.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="imagenes/excel.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Exportar a Excel</div>
                                <div class="portfolio-caption-subheading text-muted">Eleccion de categoria para exportar a XML</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a onclick="javascript:return confirm('Estas seguro que quieres desloguearte??')" class="portfolio-link" data-toggle="modal" href="./logout.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                               <center><img class="img-fluid" src="imagenes/logoutt.jpg"  width="60%" alt="" /></center> 
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Desconectarse</div>
                                <div class="portfolio-caption-subheading text-muted">Log-Out</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   

        