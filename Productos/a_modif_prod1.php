<?php
	
session_start();
		
		if(!isset($_SESSION["nick_logueado"])){
			?>
			<script type="text/javascript">
			alert("No estas logueado");
			window.location.href='../login.html';
				</script>
				<?php	
		}
        $nick=$_SESSION["nick_logueado"];
        
        if (!($nick=="admin")){
            ?>
			<script type="text/javascript">
			alert("No eres admin");
			window.location.href='../login.html';
				</script>
                <?php	
               
		}
		
$consulta = ConsultarProducto($_GET['id']);

function ConsultarProducto($id_prod)
{
  include 'a_conexion.php';
  $sentencia = "SELECT * FROM mis_productos WHERE id='" . $id_prod . "' ";
  $resultado = $conexion->query($sentencia) or die("Error al consultar producto" . mysqli_error($conexion));
  $fila = $resultado->fetch_assoc();

  return [
    $fila['id'],
    $fila['name'],
    $fila['description'],
    $fila['Genero'],
    $fila['Ano'],
    $fila['Plataforma'],
    $fila['PEGI'],
    $fila['Desarrollador'],
    $fila['price'],
    $fila['Imagenes']
   
  ];
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Modificar Videojuego</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/Header-Nightsky.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body>
  <div class="header-nightsky">
    <nav class="navbar navbar-default">
      <div class="container">
        
        <div class="collapse navbar-collapse" id="myNavbar">
        
        </div>
      </div>
    </nav>
    <div class="hero">
      <h1>Modificar Videojuego</h1>

      <br><br>

      <div id="contenido">
        <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
         
          <br>
        <form action="a_modif_prod2.php?id=<?php echo $_GET['id']?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;" enctype="multipart/form-data">

       <div class="row">
       <div class="col">
          <h3>Titulo</h3>
          <input type="text" class="form-control" name="name" placeholder="Introducir Nombre" required value="<?php echo $consulta[1] ?>"><br>
          </div>
          <div class="col">
          <div class="form-group">
          <h3>Descripcion</h3>
         <input type="text" class="form-control" name="description" id="description" required rows="3"value="<?php echo $consulta[2] ?>"></textarea>
         </div>
         </div>
         </div>
<div class="row">
<div class="col"> 
         <h3>Genero</h3>
          <select class="form-control" name="Genero"  required value="<?php echo $consulta[3] ?>"><br>
            <option>Terror</option>
            <option>Accion</option>
            <option>Aventura</option>
            <option>Puzzle</option>
            <option>Estrategia</option>
          </select>
          </div>

         <div class="col"> <h3>Año</h3> <input type="text" class="form-control" required name="Ano" placeholder="Introducir Año" value="<?php echo $consulta[4] ?>"><br></div>

<div class="col">
          <h3>Plataforma</h3>
            <select class="form-control" name="Plataforma" required  value="<?php echo $consulta[5] ?>">
              <option>PC</option>
              <option>XBOX ONE</option>
              <option>XBOX SERIES X</option>
              <option>PLAY 4</option>
              <option>PLAY 5</option>
              <option>NINTENDO SWITCH</option>
            </select>
            <br>
            </div>
            <div class="col">
          <h3>PEGI</h3>
            <select class="form-control" name="PEGI" required value="<?php echo $consulta[6] ?>">
              <option>3</option>
              <option>7</option>
              <option>12</option>
              <option>16</option>
              <option>18</option>
            </select>
          <br>
          </div>
          </div>

<div class="row">
         <div class="col"> <h3>Desarrollador</h3> <input type="text" class="form-control" name="Desarrollador" placeholder="Introducir Desarrollador" required value="<?php echo $consulta[7] ?>"></div>
         <div class="col"> <h3>Precio</h3> <input type="number" class="form-control" name="price" placeholder="Introducir precio"  required value="<?php echo $consulta[8] ?>" /><br></div>
         <div class="col"> <h3>Imagen</h3> <input type="file" class="form-control" name="image" placeholder="Introducir precio" required value="<?php echo $consulta[9] ?>" /><br></div>

</div>
<br><br>
          <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
        <br><br>
        <a href="a_index.php"> <button class="btn btn-primary">Atras</button></a>
      </div>
    </div>
  </div>
</body>
</html>