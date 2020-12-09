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
    $fila['password'],
    $fila['email'],
    $fila['phone'],
    $fila['address'],
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

    <div id="cabecera">
      <img src="images/swirl.png" width="1188" id="img1">
    </div>

    <div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Modificar Producto</h1>
        </span>
        <br>
        <form action="u_modif_prod2.php?id=<?php echo $_GET['id']?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
        <label>Id </label>
          <input type="text" disabled class="form-control" name="name"  value="<?php echo $consulta[0] ?>"><br>
          

                    <div class="form-group" id="user-group">
                        <input type="text" name="name" class="form-control" placeholder="Nombre de usuario"  minlength="5" maxlength="40" required value="<?php echo $consulta[1] ?>">
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" minlength="8" required value="<?php echo $consulta[2] ?>"> 
					</div>
				
					<div class="form-group" id="email-group">
                        <input type="email" name="email" class="form-control" placeholder="Intruduce tu email" required value="<?php echo $consulta[3] ?>"> 
					</div>

					<div class="form-group" id="tel-group">
                        <input type="tel" pattern="[0-9]{9}"   name="phone" class="form-control" placeholder="Intruduce tu telefono" required value="<?php echo $consulta[4] ?>"> 
					</div>

					<div class="form-group" id="direccion-group">
                        <input type="text" name="address" class="form-control" placeholder="Intruduce tu direccion" minlength="8" required value="<?php echo $consulta[5] ?>"> 
          </div>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>