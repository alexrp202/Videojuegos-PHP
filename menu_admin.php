
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
<body background="imagenes/fondo.jpg" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<div class="container-fluid" height="100%">
  <div class="row" >
      <div class="col-3">
		
	  </div>
          <div class="col-6" style="color:white">
	<h1 align="center">Bienvenido/a: <?php echo $nick?></h1>
	<br>


		</div>

		<section id="portfolio" style="padding: 50px;">
		<a href="productos/a_index.php">
      <div class="row" >
          <div class="col-md-6">
              <div class="portfolio-container">
                  
                  <img src="imagenes/productos.jpg" class="img-fluid" alt="Portfolio 01">
			  </div>
			  </a>
		  </div>
		  <a href="usuarios/u_index.php">
		  <div class="col-md-6">
              <div class="portfolio-container">
                 
                  <img src="imagenes/usuarios.png" class="img-fluid" alt="Portfolio 01">
			  </div>
			  </a>
		  </div>
		  <a href="./carrito/index.php">
		  <div class="col-md-6">
              <div class="portfolio-container">
                
                  <img src="imagenes/carrito.jpg" class="img-fluid" alt="Portfolio 01">
			  </div>
			  </a>
		  </div>
		  <a onclick="javascript:return confirm('Estas seguro que quieres desloguearte??')" href="logout.php">
		  <div class="col-md-6">
              <div class="portfolio-container">
                
                  <img src="imagenes/logout.jpg" class="img-fluid" alt="Portfolio 01">
			  </div>
			  </a>
          </div>
      </div>


</section>







	</div>
</div>

</body>
</html>
		
		<?php





?>