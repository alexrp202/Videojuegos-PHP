<?php 

	$conexion=mysqli_connect('localhost','root','usbw','test');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">
	
</head>
<header>

	<img  src="./imagenes/1.jpg"class="d-block w-100" alt="..."width="300" height="300">
		
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="./alta.html">Inicio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	  
		
		
		
	  </nav>
</header>
<body>

<br>

<table class="table table-striped">
<thead>
		<tr>
		<th scope="col">Titulo</th>
		<th scope="col">Genero</th>
		<th scope="col">Año</th>
		<th scope="col">Plataforma</th>
		<th scope="col">PEGI</th>	
		<th scope="col">Desarrollador</th>
		</tr>
</thead>
		<?php 
		$sql="SELECT * from videojuegos";
		$result=mysqli_query($conexion,$sql);  

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
<tbody>
		<tr>
		<th scope="row"><?php echo $mostrar['Titulo'] ?></th>
			<td><?php echo $mostrar['Genero'] ?></td>
			<td><?php echo $mostrar['Ano'] ?></td>
			<td><?php echo $mostrar['Plataforma'] ?></td>
			<td><?php echo $mostrar['PEGI'] ?></td>
			<td><?php echo $mostrar['Desarrollador'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>