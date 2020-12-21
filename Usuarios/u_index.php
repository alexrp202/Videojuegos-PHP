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
                        <li><a href="../carrito/index/index.php">Mostrar Tienda</a></li>
                        <li><a href="../xml/menuxml.php">XML</a></li>
                        <li><a href="../excel/menuexcel.php">CSV</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <h1>Gestionar Usuarios </h1>
            <a href="u_nuevo_prod1.php"> <button  type="button" class="btn btn-primary w-auto">Nuevo Usuario</button> </a>
            <br><br>
  
  <div class="container-fluid" id="contenido">
  	<table  style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
        <th>Id.</th>
        <th>Nombre</th>
  			<th>Email</th>
        <th>Telefono</th>
        <th>Direccion</th>

  		</thead>

      <?php
        include "u_conexion.php";
        $sentecia="SELECT * FROM clientes";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['id']; echo "</td>";
            echo "<td>"; echo $fila['name']; echo "</td>";
            echo "<td>"; echo $fila['email']; echo "</td>";
            echo "<td>"; echo $fila['phone']; echo "</td>";
            echo "<td>"; echo $fila['address']; echo "</td>";
            echo "<td><a href='u_modif_prod1.php?id=".$fila['id']."'> <button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></button> </a></td>";
            echo " <td><a href='u_eliminar_prod.php?id=".$fila['id']."'> <button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-trash'></button> </a></td>";
          echo "</tr>";
        }
      ?>

     
  		
  	</table>
  </div>
  
  <footer >
  <a href="../menu_admin.php">  <button type='button' class='btn btn-primary'>Atras</button> 
	</footer>

</div>


</body>
</html>