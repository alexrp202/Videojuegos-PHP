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
$nick=$_SESSION["nick_logueado"];
?>
 
 

<html>
<head>
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
        <link href="../css/styles.css" rel="stylesheet" />

        
 <!-- Portfolio Grid-->
 <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Exportar productos a xml</h2>
                    <h3 class="section-subheading text-muted">Bienvenido/a <?php echo $nick?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="./terror.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../imagenes/terror.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Juegos de terror</div>
                                <div class="portfolio-caption-subheading text-muted">Exportar juegos de terror</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="./accion.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                               <center><img class="img-fluid" src="../imagenes/accion.png" width="58%" alt="" /></center> 
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Juegos de accion</div>
                                <div class="portfolio-caption-subheading text-muted">Exportar juegos de accion</div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="./aventura.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                               <center><img class="img-fluid" width="50%" src="../imagenes/aventura.png" alt="" /></center> 
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Juegos de aventura</div>
                                <div class="portfolio-caption-subheading text-muted">Exportar juegos de aventura</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="./puzzle.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <center><img class="img-fluid" width="60%" src="../imagenes/puzzle.png" alt="" /></center>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Juegos de puzzles</div>
                                <div class="portfolio-caption-subheading text-muted">Exportar juegos de puzzles</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="./estrategia.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" width="140%" src="../imagenes/estrategia.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Juegos de estrategia</div>
                                <div class="portfolio-caption-subheading text-muted">Exportar juegos de estrategia</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="../menu_admin.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                               <center><img class="img-fluid" src="../imagenes/atras.png"  width="60%" alt="" /></center> 
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Volver al menu</div>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   

        