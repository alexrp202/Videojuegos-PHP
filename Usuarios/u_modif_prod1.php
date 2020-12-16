<?php


session_start();

if (!isset($_SESSION["nick_logueado"])) {
?>
  <script type="text/javascript">
    alert("No estas logueado");
    window.location.href = '../login.html';
  </script>
<?php
}
$nick = $_SESSION["nick_logueado"];

$consulta = ConsultarProducto($_GET['id']);

function ConsultarProducto($id_prod)
{
  include 'u_conexion.php';
  $sentencia = "SELECT * FROM clientes WHERE id='" . $id_prod . "' ";
  $resultado = $conexion->query($sentencia) or die("Error al consultar producto" . mysqli_error($conexion));
  $fila = $resultado->fetch_assoc();

  return [
    $fila['id'],
    $fila['name'],
    $fila['email'],
    $fila['phone'],
    $fila['address'],
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
          <form action="u_modif_prod2.php?id=<?php echo $_GET['id'] ?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
            <h3>Id </h3>
            <input type="text" disabled class="form-control" name="name" value="<?php echo $consulta[0] ?>"><br>

            <h3>Nombre </h3>
            <div class="form-group" id="user-group">
              <input type="text" name="name" class="form-control" placeholder="Nombre de usuario" minlength="5" maxlength="40" required value="<?php echo $consulta[1] ?>">
            </div>
            <h3>Email </h3>
            <div class="form-group" id="email-group">
              <input type="email" name="email" class="form-control" placeholder="Intruduce tu email" required value="<?php echo $consulta[2] ?>">
            </div>

            <h3>Telefono </h3>
            <div class="form-group" id="tel-group">
              <input type="tel" pattern="[0-9]{9}" name="phone" class="form-control" placeholder="Intruduce tu telefono" required value="<?php echo $consulta[3] ?>">
            </div>
            <h3>Direccion </h3>
            <div class="form-group" id="direccion-group">
              <input type="text" name="address" class="form-control" placeholder="Intruduce tu direccion" minlength="8" required value="<?php echo $consulta[4] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>
</body>

</html>