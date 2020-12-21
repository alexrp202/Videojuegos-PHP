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
	
$consulta = ConsultarProducto($_SESSION["nick_logueado"]);

function ConsultarProducto($nick)
{
  include 'u_conexion.php';
  $sentencia = "SELECT * FROM clientes WHERE name='" . $nick . "' ";
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
             
        </nav>
        <div class="hero">
            <br><br>
  
  <div class="container-fluid" id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Mi perfil</h1>
        </span>
        <br>
        <form action="miperfilvalidar.php?id=<?php echo $_SESSION["nick_logueado"]?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      
        

                    <label>Nombre Usuario</label>
                    <div class="form-group" id="user-group">
                        <input type="text" name="name" class="form-control" placeholder="Nombre de usuario"  minlength="5" maxlength="40" required value="<?php echo $consulta[1] ?>">
                    </div>
                    <label>Contraseña</label>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" minlength="8" required> 
					</div>
                    <label>Email</label>
					<div class="form-group" id="email-group">
                        <input type="email" name="email" class="form-control" placeholder="Intruduce tu email" required value="<?php echo $consulta[3] ?>"> 
					</div>
                    <label>Telefono</label>
					<div class="form-group" id="tel-group">
                        <input type="tel" pattern="[0-9]{9}"   name="phone" class="form-control" placeholder="Intruduce tu telefono" required value="<?php echo $consulta[4] ?>"> 
					</div>
                    <label>Direccion</label>
					<div class="form-group" id="direccion-group">
                        <input type="text" name="address" class="form-control" placeholder="Intruduce tu direccion" minlength="8" required value="<?php echo $consulta[5] ?>"> 
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>