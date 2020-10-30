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
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <div class="todo">

    <div id="cabecera">
      <img src="images/swirl.png" width="1188" id="img1">
    </div>

    <div id="contenido" >
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Modificar Producto</h1>
        </span>
        <br>
        <form action="a_modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
          Id: <input type="text" name="id"><br>
          <label>Nombre Videojuego </label>
          <input type="text" id="Titulo" name="Titulo" value="<?php echo $consulta[0] ?>"><br>

          <label for="Genero">Genero</label>
          <select class="form-control" name="Genero" value="<?php echo $consulta[1] ?>"><br>
            <option>Terror</option>
            <option>Accion</option>
            <option>Aventura</option>
            <option>Puzzle</option>
            <option>Estrategia</option>
          </select>>

          Ano: <input type="text" class="form-control" name="Ano" placeholder="Introducir Año" value="<?php echo $consulta[3] ?>"><br>
          Plataforma: <input type="text" class="form-control" name="Plataforma" placeholder="Introducir Plataforma" value="<?php echo $consulta[3] ?>"><br>
          Pegi: <input type="text" class="form-control" name="PEGI" placeholder="Introducir Pegi" value="<?php echo $consulta[4] ?>"><br>
          Desarrollador: <input type="text" class="form-control" name="Desarrollador" placeholder="Introducir Desarrollador" value="<?php echo $consulta[5] ?>">
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>

    </div>

    

  </div>


</body>

</html>