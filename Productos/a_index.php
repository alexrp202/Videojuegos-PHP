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
            <h1>Gestionar productos</h1>
            <a href="a_nuevo_prod1.php"> <button  type="button" class="btn btn-primary w-auto">Nuevo Producto</button> </a>
            <br><br>
  <div id="contenido">
    <table  style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
       <thead>

      <th>Imagen</th>
      <th>Id.</th>
      <th>Titulo.</th>
      <th>Descripcion</th>
      <th>Genero</th>
      <th>Ano</th>
      <th>Platafotma</th>
      <th>Pegi</th>
      <th>Desarrollador</th>
      <th>Precio</th>
        </thead>

    <?php
      include "a_conexion.php";
      $sentecia="SELECT * FROM mis_productos";
      $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
      while($fila=$resultado->fetch_assoc())
      {
     $id = $fila['id'];
   
        echo "<tr>";?>

<td><!-- Button trigger modal -->
 <a href="ver.php?id=<?php echo $id ?>">  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
  Mostrar caratula
</button></a>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  
      </div>
     
    </div>
  </div>
</div></td>
 
    <!-- <?php echo $fila["name"]?>
    <img src='ver.php?id=<?php echo $fila['id'] ?>' alt='Img blob desde MySQL' width="400" />  -->
        <?php
          echo "<td>"; echo $fila['id']; echo "</td>";
          echo "<td>"; echo $fila['name']; echo "</td>";
          echo "<td>"; echo $fila['description']; echo "</td>";
          echo "<td>"; echo $fila['Genero']; echo "</td>";
          echo "<td>"; echo $fila['Ano']; echo "</td>";
          echo "<td>"; echo $fila['Plataforma']; echo "</td>";
          echo "<td>"; echo $fila['PEGI']; echo "</td>";
          echo "<td>"; echo $fila['Desarrollador']; echo "</td>";
          echo "<td>"; echo $fila['price']; echo " EUR";echo "</td>";
          echo "<td><a href='a_modif_prod1.php?id=".$fila['id']."'> <button type='button'  class='btn btn-primary'><class   class='glyphicon glyphicon-pencil'></class></button> </a></td>";
          echo " <td><a href='a_eliminar_prod.php?id=".$fila['id']."'> <button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-trash'></button> </a></td>";
        echo "</tr>";
      }
    ?>

   
        
    </table>

      
    <footer >
  <a href="../menu_admin.php">  <button type='button' class='btn btn-primary'>Atras</button> 
	</footer>
            
        </div>
    </div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
