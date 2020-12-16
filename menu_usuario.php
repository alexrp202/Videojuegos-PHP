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
 
 
 
 <!-- Font Awesome icons (free version)-->

  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <body background="imagenes/fondousuario.jpg" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 <!-- Portfolio Grid-->
 <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Menu de usuario</h2>
                    <h3 class="section-subheading text-muted">Bienvenido/a <?php echo $nick?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="carrito/index.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="imagenes/carritousu.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Carrito</div>
                                <div class="portfolio-caption-subheading text-muted">Mostrar carrito</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="usuarios/miperfil.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="imagenes/miperfil.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mi perfil</div>
                                <div class="portfolio-caption-subheading text-muted">Ajustes de mi perfil</div>
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
        </body>

        
