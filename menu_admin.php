
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
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- /Bootstrap --> 

</head>
<body background="Fondo2.png" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<div class="container-fluid" height="100%">
  <div class="row" >
      <div class="col-3">
		
	  </div>
          <div class="col-6" style="color:white">
	<h1 align="center">Bienvenido/a: <?php echo $nick?></h1>
	<br>


	<table  class="table table-hover">
	<tr>
		<td align="center"><button style='width:25%;' width="20%" type="button" onclick="location.href='a_index.php'" class="btn btn-primary btn-lg">Gestion de productos</button></td>
	</tr>

	<tr>
		<td align="center"><button style='width:25%;' width="20%" type="button" onclick="location.href='usuarios/u_index.php'" class="btn btn-primary btn-lg">Gestion de usuarios</button></td>
	</tr>




 	</tr>		
	<tr>
		<td align="center"><button style='width:25%;' width="20%" type="button" onclick="location.href='mostrarjuegos.php'" class="btn btn-primary btn-lg">Ver productos</button></td>
	 </tr>
	 <tr>
		<td align="center"><button style='width:25%;' width="20%" type="button" onclick="location.href='./carrito/index.php'" class="btn btn-primary btn-lg">Ver carrito</button></td>
 	</tr>
	<tr>
		<td align="center"><a href="logout.php" onclick="javascript:return confirm('Estas seguro que quieres desloguearte??')"><button style='width:25%;' type="button"  onclick="location.href='logout.php'" class="btn btn-secondary btn-lg">Salir</button></a></td>
</tr>

	</table>

			</div>
		<div class="col-3" >

			<!--<iframe frameborder="1" height="100%" width="100%" src="consultarRanking.php" name="ranking"></iframe>-->
		</div>
	</div>
</div>

</body>
</html>
		
		<?php





?>