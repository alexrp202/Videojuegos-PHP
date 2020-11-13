<?php

$consulta = ConsultarProducto($_GET['id']);

function ConsultarProducto($id_prod)
{
  include 'a_conexion.php';
  $sentencia = "SELECT * FROM videojuegos WHERE id='" . $id_prod . "' ";
  $resultado = $conexion->query($sentencia) or die("Error al consultar producto" . mysqli_error($conexion));
  $fila = $resultado->fetch_assoc();

  return [
    $fila['Titulo'],
    $fila['Genero'],
    $fila['Ano'],
    $fila['Plataforma'],
    $fila['PEGI'],
    $fila['Desarrollador']
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
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="todo">

    <div id="cabecera">
      <img src="images/swirl.png" width="1188" id="img1">
    </div>

    <div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Modificar Producto</h1>
        </span>
        <br>
        <form action="a_modif_prod2.php?id=<?php echo $_GET['id']?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

          <label>Nombre Videojuego </label>
          <input type="text" class="form-control" name="name" placeholder="Introducir Nombre" value="<?php echo $consulta[0] ?>"><br>

          <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripcion</label>
         <textarea class="form-control" name="description" id="description" id="exampleFormControlTextarea1" rows="3"value="<?php echo $consulta[1] ?>"></textarea>
         </div>

          <label for="Genero">Genero</label>
          <select class="form-control" name="Genero" value="<?php echo $consulta[2] ?>"><br>
            <option>Terror</option>
            <option>Accion</option>
            <option>Aventura</option>
            <option>Puzzle</option>
            <option>Estrategia</option>
          </select>>

          Ano: <input type="text" class="form-control" name="Ano" placeholder="Introducir Año" value="<?php echo $consulta[3] ?>"><br>
          Plataforma: <input type="text" class="form-control" name="Plataforma" placeholder="Introducir Plataforma" value="<?php echo $consulta[4] ?>"><br>
          Pegi: <input type="text" class="form-control" name="PEGI" placeholder="Introducir Pegi" value="<?php echo $consulta[5] ?>"><br>
          Desarrollador: <input type="text" class="form-control" name="Desarrollador" placeholder="Introducir Desarrollador" value="<?php echo $consulta[6] ?>">
          Precio: <input type="number" class="form-control" name="precio" placeholder="Introducir precio"  value="<?php echo $consulta[7] ?>" /><br>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>