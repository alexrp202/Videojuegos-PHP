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
    $fila['price']
   
  ];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Producto</title>
  <style type="text/css">
    @import url("css/mycss.css");
  </style>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="todo">


    <div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Modificar Producto</h1>
        </span>
        <br>
        <form action="a_modif_prod2.php?id=<?php echo $_GET['id']?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

        <label>Id </label>
          <input type="text" disabled class="form-control" name="name"  value="<?php echo $consulta[0] ?>"><br>
          <label>Nombre Videojuego </label>
          <input type="text" class="form-control" name="name" placeholder="Introducir Nombre" value="<?php echo $consulta[1] ?>"><br>

          <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripcion</label>
         <textarea class="form-control" name="description" id="description" id="exampleFormControlTextarea1" rows="3"value="<?php echo $consulta[2] ?>"></textarea>
         </div>

          <label for="Genero">Genero</label>
          <select class="form-control" name="Genero" value="<?php echo $consulta[3] ?>"><br>
            <option>Terror</option>
            <option>Accion</option>
            <option>Aventura</option>
            <option>Puzzle</option>
            <option>Estrategia</option>
          </select>

          Ano: <input type="text" class="form-control" name="Ano" placeholder="Introducir Año" value="<?php echo $consulta[4] ?>"><br>
          Plataforma: <input type="text" class="form-control" name="Plataforma" placeholder="Introducir Plataforma" value="<?php echo $consulta[5] ?>"><br>
          Pegi: <input type="text" class="form-control" name="PEGI" placeholder="Introducir Pegi" value="<?php echo $consulta[6] ?>"><br>
          Desarrollador: <input type="text" class="form-control" name="Desarrollador" placeholder="Introducir Desarrollador" value="<?php echo $consulta[7] ?>">
          Precio: <input type="number" class="form-control" name="price" placeholder="Introducir precio"  value="<?php echo $consulta[8] ?>" /><br>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>