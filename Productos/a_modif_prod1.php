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
      <h1>Modificar Usuario</h1>

      <br><br>

      <div id="contenido">
        <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
         
          <br>
        <form action="a_modif_prod2.php?id=<?php echo $_GET['id']?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;" enctype="multipart/form-data">

        <h3>Id</h3>
          <input type="text" disabled class="form-control" name="name"  value="<?php echo $consulta[0] ?>"><br>
          <h3>Titulo</h3>
          <input type="text" class="form-control" name="name" placeholder="Introducir Nombre" value="<?php echo $consulta[1] ?>"><br>

          <div class="form-group">
          <h3>Descripcion</h3>
         <textarea class="form-control" name="description" id="description" id="exampleFormControlTextarea1" rows="3"value="<?php echo $consulta[2] ?>"></textarea>
         </div>

         <h3>Genero</h3>
          <select class="form-control" name="Genero" value="<?php echo $consulta[3] ?>"><br>
            <option>Terror</option>
            <option>Accion</option>
            <option>Aventura</option>
            <option>Puzzle</option>
            <option>Estrategia</option>
          </select>

          <h3>Año</h3> <input type="text" class="form-control" name="Ano" placeholder="Introducir Año" value="<?php echo $consulta[4] ?>"><br>

          <h3>Plataforma</h3>
            <select class="form-control" name="Plataforma"  value="<?php echo $consulta[5] ?>">
              <option>PC</option>
              <option>XBOX ONE</option>
              <option>XBOX SERIES X</option>
              <option>PLAY 4</option>
              <option>PLAY 5</option>
              <option>NINTENDO SWITCH</option>
            </select>
            <br>

          <h3>PEGI</h3>
            <select class="form-control" name="PEGI" value="<?php echo $consulta[6] ?>">
              <option>3</option>
              <option>7</option>
              <option>12</option>
              <option>16</option>
              <option>18</option>
            </select>
          <br>


          <h3>Desarrollador</h3> <input type="text" class="form-control" name="Desarrollador" placeholder="Introducir Desarrollador" value="<?php echo $consulta[7] ?>">
          <h3>Precio</h3> <input type="number" class="form-control" name="price" placeholder="Introducir precio"  value="<?php echo $consulta[8] ?>" /><br>
          <h3>Imagen</h3> <input type="file" class="form-control" name="image" placeholder="Introducir precio"  value="<?php echo $consulta[9] ?>" /><br>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>