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
		
		$image = $_FILES['image']['tmp_name'];
		
	
	ModificarProducto($_GET['id'], $_POST['name'], $_POST['description'], $_POST['Genero'], $_POST['Ano'], $_POST['Plataforma'], $_POST['PEGI'],$_POST['Desarrollador'],$_POST['price'],$imgContenido = addslashes(file_get_contents($image)) );

	function ModificarProducto($id, $name,$description, $Genero,$Ano,$Plataforma,$PEGI,$Desarrollador,$price,$imgContenido)
	{
		include 'a_conexion.php';
		 $sentencia=("UPDATE mis_productos SET id='".$id."',name='".$name."',description='".$description."',Genero='".$Genero."',Ano='".$Ano."',Plataforma='".$Plataforma."',PEGI='".$PEGI."',Desarrollador='".$Desarrollador."',price='".$price."',imagenes='".$imgContenido."'
		WHERE id='".$id."' ");
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>
<script type="text/javascript">
	alert("Videojuego Actualizado Exitosamante!!");
	window.location.href='a_index.php';
</script>
